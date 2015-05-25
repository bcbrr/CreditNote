<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace CreditNote\Event\Base;

use Thelia\Core\Event\ActionEvent;
use CreditNote\Model\OrderCreditNote;

/**
* Class OrderCreditNoteEvent
* @package CreditNote\Event\Base
* @author TheliaStudio
*/
class OrderCreditNoteEvent extends ActionEvent
{
    protected $id;
    protected $orderId;
    protected $amount;
    protected $message;
    protected $couponId;
    protected $orderCreditNote;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    public function getCouponId()
    {
        return $this->couponId;
    }

    public function setCouponId($couponId)
    {
        $this->couponId = $couponId;

        return $this;
    }

    public function getOrderCreditNote()
    {
        return $this->orderCreditNote;
    }

    public function setOrderCreditNote(OrderCreditNote $orderCreditNote)
    {
        $this->orderCreditNote = $orderCreditNote;

        return $this;
    }
}