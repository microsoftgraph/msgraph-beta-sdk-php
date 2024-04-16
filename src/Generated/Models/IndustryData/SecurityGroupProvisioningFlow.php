<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityGroupProvisioningFlow extends ProvisioningFlow implements Parsable 
{
    /**
     * Instantiates a new SecurityGroupProvisioningFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.securityGroupProvisioningFlow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityGroupProvisioningFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityGroupProvisioningFlow {
        return new SecurityGroupProvisioningFlow();
    }

    /**
     * Gets the creationOptions property value. The creationOptions property
     * @return SecurityGroupCreationOptions|null
    */
    public function getCreationOptions(): ?SecurityGroupCreationOptions {
        $val = $this->getBackingStore()->get('creationOptions');
        if (is_null($val) || $val instanceof SecurityGroupCreationOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationOptions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'creationOptions' => fn(ParseNode $n) => $o->setCreationOptions($n->getObjectValue([SecurityGroupCreationOptions::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('creationOptions', $this->getCreationOptions());
    }

    /**
     * Sets the creationOptions property value. The creationOptions property
     * @param SecurityGroupCreationOptions|null $value Value to set for the creationOptions property.
    */
    public function setCreationOptions(?SecurityGroupCreationOptions $value): void {
        $this->getBackingStore()->set('creationOptions', $value);
    }

}
