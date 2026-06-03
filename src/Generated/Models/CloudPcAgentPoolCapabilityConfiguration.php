<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcAgentPoolCapabilityConfiguration extends CloudPcPoolCapabilityConfiguration implements Parsable 
{
    /**
     * Instantiates a new CloudPcAgentPoolCapabilityConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcAgentPoolCapabilityConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcAgentPoolCapabilityConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcAgentPoolCapabilityConfiguration {
        return new CloudPcAgentPoolCapabilityConfiguration();
    }

    /**
     * Gets the enableSingleSignOn property value. When true, provisioned Cloud PCs support single sign-on, allowing users to authenticate with password-less options (such as FIDO2 keys) via Microsoft Entra ID. Default value is false.
     * @return bool|null
    */
    public function getEnableSingleSignOn(): ?bool {
        $val = $this->getBackingStore()->get('enableSingleSignOn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableSingleSignOn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enableSingleSignOn' => fn(ParseNode $n) => $o->setEnableSingleSignOn($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enableSingleSignOn', $this->getEnableSingleSignOn());
    }

    /**
     * Sets the enableSingleSignOn property value. When true, provisioned Cloud PCs support single sign-on, allowing users to authenticate with password-less options (such as FIDO2 keys) via Microsoft Entra ID. Default value is false.
     * @param bool|null $value Value to set for the enableSingleSignOn property.
    */
    public function setEnableSingleSignOn(?bool $value): void {
        $this->getBackingStore()->set('enableSingleSignOn', $value);
    }

}
