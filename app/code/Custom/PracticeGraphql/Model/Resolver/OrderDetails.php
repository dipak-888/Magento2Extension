<?php

declare(strict_types=1);

namespace Custom\PracticeGraphql\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Sales\Api\Data\OrderInterface;

/**
 * orderDetails
 */
class OrderDetails implements ResolverInterface
{

    /**
     * @var OrderInterface
     */
    public $orderinterface;

    /**
     * @param OrderInterface $orderinterface
     */
    public function __construct(OrderInterface $orderinterface)
    {
        $this->orderinterface = $orderinterface;
    }

    /**
     * @param Field       $field
     * @param             $context
     * @param ResolveInfo $info
     * @param array|null  $value
     * @param array|null  $args
     *
     * @return array
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        $order = $this->orderinterface->loadByIncrementId($args['order_id']);
        $postData = [
            'order_id' => $order->getEntityId(),
            'name' => $order->getCustomerFirstname() . ' ' . $order->getCustomerLastname(),
            'email' => $order->getCustomerEmail(),
            'status' => $order->getStatus(),
            'amount' => $order->getGrandTotal(),
            'order_date' => $order->getCreatedAt()

        ];
        return $postData;

    }//end resolve()


}//end class
