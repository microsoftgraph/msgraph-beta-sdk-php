<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcSubscription extends Entity implements Parsable 
{
    /**
     * Instantiates a new cloudPcSubscription and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSubscription
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSubscription {
        return new CloudPcSubscription();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'subscriptionName' => fn(ParseNode $n) => $o->setSubscriptionName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the subscriptionId property value. The ID of the subscription.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->getBackingStore()->get('subscriptionId');
    }

    /**
     * Gets the subscriptionName property value. The name of the subscription.
     * @return string|null
    */
    public function getSubscriptionName(): ?string {
        return $this->getBackingStore()->get('subscriptionName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('subscriptionName', $this->getSubscriptionName());
    }

    /**
     * Sets the subscriptionId property value. The ID of the subscription.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the subscriptionName property value. The name of the subscription.
     * @param string|null $value Value to set for the subscriptionName property.
    */
    public function setSubscriptionName(?string $value): void {
        $this->getBackingStore()->set('subscriptionName', $value);
    }

}
