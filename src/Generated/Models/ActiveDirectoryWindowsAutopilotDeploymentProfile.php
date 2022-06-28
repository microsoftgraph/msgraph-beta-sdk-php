<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActiveDirectoryWindowsAutopilotDeploymentProfile extends WindowsAutopilotDeploymentProfile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WindowsDomainJoinConfiguration|null $domainJoinConfiguration Configuration to join Active Directory domain
    */
    private ?WindowsDomainJoinConfiguration $domainJoinConfiguration = null;
    
    /**
     * @var bool|null $hybridAzureADJoinSkipConnectivityCheck The Autopilot Hybrid Azure AD join flow will continue even if it does not establish domain controller connectivity during OOBE.
    */
    private ?bool $hybridAzureADJoinSkipConnectivityCheck = null;
    
    /**
     * Instantiates a new ActiveDirectoryWindowsAutopilotDeploymentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the domainJoinConfiguration property value. Configuration to join Active Directory domain
     * @return WindowsDomainJoinConfiguration|null
    */
    public function getDomainJoinConfiguration(): ?WindowsDomainJoinConfiguration {
        return $this->domainJoinConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domainJoinConfiguration' => function (ParseNode $n) use ($o) { $o->setDomainJoinConfiguration($n->getObjectValue(array(WindowsDomainJoinConfiguration::class, 'createFromDiscriminatorValue'))); },
            'hybridAzureADJoinSkipConnectivityCheck' => function (ParseNode $n) use ($o) { $o->setHybridAzureADJoinSkipConnectivityCheck($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the hybridAzureADJoinSkipConnectivityCheck property value. The Autopilot Hybrid Azure AD join flow will continue even if it does not establish domain controller connectivity during OOBE.
     * @return bool|null
    */
    public function getHybridAzureADJoinSkipConnectivityCheck(): ?bool {
        return $this->hybridAzureADJoinSkipConnectivityCheck;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('domainJoinConfiguration', $this->domainJoinConfiguration);
        $writer->writeBooleanValue('hybridAzureADJoinSkipConnectivityCheck', $this->hybridAzureADJoinSkipConnectivityCheck);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the domainJoinConfiguration property value. Configuration to join Active Directory domain
     *  @param WindowsDomainJoinConfiguration|null $value Value to set for the domainJoinConfiguration property.
    */
    public function setDomainJoinConfiguration(?WindowsDomainJoinConfiguration $value ): void {
        $this->domainJoinConfiguration = $value;
    }

    /**
     * Sets the hybridAzureADJoinSkipConnectivityCheck property value. The Autopilot Hybrid Azure AD join flow will continue even if it does not establish domain controller connectivity during OOBE.
     *  @param bool|null $value Value to set for the hybridAzureADJoinSkipConnectivityCheck property.
    */
    public function setHybridAzureADJoinSkipConnectivityCheck(?bool $value ): void {
        $this->hybridAzureADJoinSkipConnectivityCheck = $value;
    }

}
