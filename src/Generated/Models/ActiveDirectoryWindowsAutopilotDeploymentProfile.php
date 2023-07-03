<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActiveDirectoryWindowsAutopilotDeploymentProfile extends WindowsAutopilotDeploymentProfile implements Parsable 
{
    /**
     * Instantiates a new ActiveDirectoryWindowsAutopilotDeploymentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.activeDirectoryWindowsAutopilotDeploymentProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActiveDirectoryWindowsAutopilotDeploymentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActiveDirectoryWindowsAutopilotDeploymentProfile {
        return new ActiveDirectoryWindowsAutopilotDeploymentProfile();
    }

    /**
     * Gets the domainJoinConfiguration property value. Configuration to join Active Directory domain
     * @return WindowsDomainJoinConfiguration|null
    */
    public function getDomainJoinConfiguration(): ?WindowsDomainJoinConfiguration {
        $val = $this->getBackingStore()->get('domainJoinConfiguration');
        if (is_null($val) || $val instanceof WindowsDomainJoinConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainJoinConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domainJoinConfiguration' => fn(ParseNode $n) => $o->setDomainJoinConfiguration($n->getObjectValue([WindowsDomainJoinConfiguration::class, 'createFromDiscriminatorValue'])),
            'hybridAzureADJoinSkipConnectivityCheck' => fn(ParseNode $n) => $o->setHybridAzureADJoinSkipConnectivityCheck($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the hybridAzureADJoinSkipConnectivityCheck property value. The Autopilot Hybrid Azure AD join flow will continue even if it does not establish domain controller connectivity during OOBE.
     * @return bool|null
    */
    public function getHybridAzureADJoinSkipConnectivityCheck(): ?bool {
        $val = $this->getBackingStore()->get('hybridAzureADJoinSkipConnectivityCheck');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hybridAzureADJoinSkipConnectivityCheck'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('domainJoinConfiguration', $this->getDomainJoinConfiguration());
        $writer->writeBooleanValue('hybridAzureADJoinSkipConnectivityCheck', $this->getHybridAzureADJoinSkipConnectivityCheck());
    }

    /**
     * Sets the domainJoinConfiguration property value. Configuration to join Active Directory domain
     * @param WindowsDomainJoinConfiguration|null $value Value to set for the domainJoinConfiguration property.
    */
    public function setDomainJoinConfiguration(?WindowsDomainJoinConfiguration $value): void {
        $this->getBackingStore()->set('domainJoinConfiguration', $value);
    }

    /**
     * Sets the hybridAzureADJoinSkipConnectivityCheck property value. The Autopilot Hybrid Azure AD join flow will continue even if it does not establish domain controller connectivity during OOBE.
     * @param bool|null $value Value to set for the hybridAzureADJoinSkipConnectivityCheck property.
    */
    public function setHybridAzureADJoinSkipConnectivityCheck(?bool $value): void {
        $this->getBackingStore()->set('hybridAzureADJoinSkipConnectivityCheck', $value);
    }

}
