<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\OverrideComplianceState;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\AdministratorConfiguredDeviceComplianceState;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OverrideComplianceStateRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AdministratorConfiguredDeviceComplianceState|null $complianceState  */
    private ?AdministratorConfiguredDeviceComplianceState $complianceState = null;
    
    /** @var string|null $remediationUrl  */
    private ?string $remediationUrl = null;
    
    /**
     * Instantiates a new overrideComplianceStateRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OverrideComplianceStateRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OverrideComplianceStateRequestBody {
        return new OverrideComplianceStateRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the complianceState property value. 
     * @return AdministratorConfiguredDeviceComplianceState|null
    */
    public function getComplianceState(): ?AdministratorConfiguredDeviceComplianceState {
        return $this->complianceState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'complianceState' => function (self $o, ParseNode $n) { $o->setComplianceState($n->getEnumValue(AdministratorConfiguredDeviceComplianceState::class)); },
            'remediationUrl' => function (self $o, ParseNode $n) { $o->setRemediationUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the remediationUrl property value. 
     * @return string|null
    */
    public function getRemediationUrl(): ?string {
        return $this->remediationUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('complianceState', $this->complianceState);
        $writer->writeStringValue('remediationUrl', $this->remediationUrl);
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
     * Sets the complianceState property value. 
     *  @param AdministratorConfiguredDeviceComplianceState|null $value Value to set for the complianceState property.
    */
    public function setComplianceState(?AdministratorConfiguredDeviceComplianceState $value ): void {
        $this->complianceState = $value;
    }

    /**
     * Sets the remediationUrl property value. 
     *  @param string|null $value Value to set for the remediationUrl property.
    */
    public function setRemediationUrl(?string $value ): void {
        $this->remediationUrl = $value;
    }

}
