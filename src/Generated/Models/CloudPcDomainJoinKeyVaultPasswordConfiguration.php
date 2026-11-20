<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcDomainJoinKeyVaultPasswordConfiguration extends CloudPcDomainJoinKeyVaultIntentConfiguration implements Parsable 
{
    /**
     * Instantiates a new CloudPcDomainJoinKeyVaultPasswordConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcDomainJoinKeyVaultPasswordConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDomainJoinKeyVaultPasswordConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDomainJoinKeyVaultPasswordConfiguration {
        return new CloudPcDomainJoinKeyVaultPasswordConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userIdentity' => fn(ParseNode $n) => $o->setUserIdentity($n->getObjectValue([CloudPcDomainJoinUserIdentity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the userIdentity property value. The userIdentity property
     * @return CloudPcDomainJoinUserIdentity|null
    */
    public function getUserIdentity(): ?CloudPcDomainJoinUserIdentity {
        $val = $this->getBackingStore()->get('userIdentity');
        if (is_null($val) || $val instanceof CloudPcDomainJoinUserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userIdentity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('userIdentity', $this->getUserIdentity());
    }

    /**
     * Sets the userIdentity property value. The userIdentity property
     * @param CloudPcDomainJoinUserIdentity|null $value Value to set for the userIdentity property.
    */
    public function setUserIdentity(?CloudPcDomainJoinUserIdentity $value): void {
        $this->getBackingStore()->set('userIdentity', $value);
    }

}
