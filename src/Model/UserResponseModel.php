<?php

namespace ElevenLabs\V1\SDK\Model;

class UserResponseModel extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var SubscriptionResponseModel
     */
    protected $subscription;
    /**
     * 
     *
     * @var bool
     */
    protected $isNewUser;
    /**
     * 
     *
     * @var string
     */
    protected $xiApiKey;
    /**
     * 
     *
     * @return SubscriptionResponseModel
     */
    public function getSubscription() : SubscriptionResponseModel
    {
        return $this->subscription;
    }
    /**
     * 
     *
     * @param SubscriptionResponseModel $subscription
     *
     * @return self
     */
    public function setSubscription(SubscriptionResponseModel $subscription) : self
    {
        $this->initialized['subscription'] = true;
        $this->subscription = $subscription;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsNewUser() : bool
    {
        return $this->isNewUser;
    }
    /**
     * 
     *
     * @param bool $isNewUser
     *
     * @return self
     */
    public function setIsNewUser(bool $isNewUser) : self
    {
        $this->initialized['isNewUser'] = true;
        $this->isNewUser = $isNewUser;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getXiApiKey() : string
    {
        return $this->xiApiKey;
    }
    /**
     * 
     *
     * @param string $xiApiKey
     *
     * @return self
     */
    public function setXiApiKey(string $xiApiKey) : self
    {
        $this->initialized['xiApiKey'] = true;
        $this->xiApiKey = $xiApiKey;
        return $this;
    }
}