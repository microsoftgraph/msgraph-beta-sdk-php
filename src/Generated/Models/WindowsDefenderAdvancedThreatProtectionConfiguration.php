<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDefenderAdvancedThreatProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $advancedThreatProtectionAutoPopulateOnboardingBlob Auto populate onboarding blob programmatically from Advanced Threat protection service
    */
    private ?bool $advancedThreatProtectionAutoPopulateOnboardingBlob = null;
    
    /**
     * @var string|null $advancedThreatProtectionOffboardingBlob Windows Defender AdvancedThreatProtection Offboarding Blob.
    */
    private ?string $advancedThreatProtectionOffboardingBlob = null;
    
    /**
     * @var string|null $advancedThreatProtectionOffboardingFilename Name of the file from which AdvancedThreatProtectionOffboardingBlob was obtained.
    */
    private ?string $advancedThreatProtectionOffboardingFilename = null;
    
    /**
     * @var string|null $advancedThreatProtectionOnboardingBlob Windows Defender AdvancedThreatProtection Onboarding Blob.
    */
    private ?string $advancedThreatProtectionOnboardingBlob = null;
    
    /**
     * @var string|null $advancedThreatProtectionOnboardingFilename Name of the file from which AdvancedThreatProtectionOnboardingBlob was obtained.
    */
    private ?string $advancedThreatProtectionOnboardingFilename = null;
    
    /**
     * @var bool|null $allowSampleSharing Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
    */
    private ?bool $allowSampleSharing = null;
    
    /**
     * @var bool|null $enableExpeditedTelemetryReporting Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
    */
    private ?bool $enableExpeditedTelemetryReporting = null;
    
    /**
     * Instantiates a new WindowsDefenderAdvancedThreatProtectionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsDefenderAdvancedThreatProtectionConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDefenderAdvancedThreatProtectionConfiguration {
        return new WindowsDefenderAdvancedThreatProtectionConfiguration();
    }

    /**
     * Gets the advancedThreatProtectionAutoPopulateOnboardingBlob property value. Auto populate onboarding blob programmatically from Advanced Threat protection service
     * @return bool|null
    */
    public function getAdvancedThreatProtectionAutoPopulateOnboardingBlob(): ?bool {
        return $this->advancedThreatProtectionAutoPopulateOnboardingBlob;
    }

    /**
     * Gets the advancedThreatProtectionOffboardingBlob property value. Windows Defender AdvancedThreatProtection Offboarding Blob.
     * @return string|null
    */
    public function getAdvancedThreatProtectionOffboardingBlob(): ?string {
        return $this->advancedThreatProtectionOffboardingBlob;
    }

    /**
     * Gets the advancedThreatProtectionOffboardingFilename property value. Name of the file from which AdvancedThreatProtectionOffboardingBlob was obtained.
     * @return string|null
    */
    public function getAdvancedThreatProtectionOffboardingFilename(): ?string {
        return $this->advancedThreatProtectionOffboardingFilename;
    }

    /**
     * Gets the advancedThreatProtectionOnboardingBlob property value. Windows Defender AdvancedThreatProtection Onboarding Blob.
     * @return string|null
    */
    public function getAdvancedThreatProtectionOnboardingBlob(): ?string {
        return $this->advancedThreatProtectionOnboardingBlob;
    }

    /**
     * Gets the advancedThreatProtectionOnboardingFilename property value. Name of the file from which AdvancedThreatProtectionOnboardingBlob was obtained.
     * @return string|null
    */
    public function getAdvancedThreatProtectionOnboardingFilename(): ?string {
        return $this->advancedThreatProtectionOnboardingFilename;
    }

    /**
     * Gets the allowSampleSharing property value. Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
     * @return bool|null
    */
    public function getAllowSampleSharing(): ?bool {
        return $this->allowSampleSharing;
    }

    /**
     * Gets the enableExpeditedTelemetryReporting property value. Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
     * @return bool|null
    */
    public function getEnableExpeditedTelemetryReporting(): ?bool {
        return $this->enableExpeditedTelemetryReporting;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedThreatProtectionAutoPopulateOnboardingBlob' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionAutoPopulateOnboardingBlob($n->getBooleanValue()); },
            'advancedThreatProtectionOffboardingBlob' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionOffboardingBlob($n->getStringValue()); },
            'advancedThreatProtectionOffboardingFilename' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionOffboardingFilename($n->getStringValue()); },
            'advancedThreatProtectionOnboardingBlob' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionOnboardingBlob($n->getStringValue()); },
            'advancedThreatProtectionOnboardingFilename' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionOnboardingFilename($n->getStringValue()); },
            'allowSampleSharing' => function (ParseNode $n) use ($o) { $o->setAllowSampleSharing($n->getBooleanValue()); },
            'enableExpeditedTelemetryReporting' => function (ParseNode $n) use ($o) { $o->setEnableExpeditedTelemetryReporting($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('advancedThreatProtectionAutoPopulateOnboardingBlob', $this->advancedThreatProtectionAutoPopulateOnboardingBlob);
        $writer->writeStringValue('advancedThreatProtectionOffboardingBlob', $this->advancedThreatProtectionOffboardingBlob);
        $writer->writeStringValue('advancedThreatProtectionOffboardingFilename', $this->advancedThreatProtectionOffboardingFilename);
        $writer->writeStringValue('advancedThreatProtectionOnboardingBlob', $this->advancedThreatProtectionOnboardingBlob);
        $writer->writeStringValue('advancedThreatProtectionOnboardingFilename', $this->advancedThreatProtectionOnboardingFilename);
        $writer->writeBooleanValue('allowSampleSharing', $this->allowSampleSharing);
        $writer->writeBooleanValue('enableExpeditedTelemetryReporting', $this->enableExpeditedTelemetryReporting);
    }

    /**
     * Sets the advancedThreatProtectionAutoPopulateOnboardingBlob property value. Auto populate onboarding blob programmatically from Advanced Threat protection service
     *  @param bool|null $value Value to set for the advancedThreatProtectionAutoPopulateOnboardingBlob property.
    */
    public function setAdvancedThreatProtectionAutoPopulateOnboardingBlob(?bool $value ): void {
        $this->advancedThreatProtectionAutoPopulateOnboardingBlob = $value;
    }

    /**
     * Sets the advancedThreatProtectionOffboardingBlob property value. Windows Defender AdvancedThreatProtection Offboarding Blob.
     *  @param string|null $value Value to set for the advancedThreatProtectionOffboardingBlob property.
    */
    public function setAdvancedThreatProtectionOffboardingBlob(?string $value ): void {
        $this->advancedThreatProtectionOffboardingBlob = $value;
    }

    /**
     * Sets the advancedThreatProtectionOffboardingFilename property value. Name of the file from which AdvancedThreatProtectionOffboardingBlob was obtained.
     *  @param string|null $value Value to set for the advancedThreatProtectionOffboardingFilename property.
    */
    public function setAdvancedThreatProtectionOffboardingFilename(?string $value ): void {
        $this->advancedThreatProtectionOffboardingFilename = $value;
    }

    /**
     * Sets the advancedThreatProtectionOnboardingBlob property value. Windows Defender AdvancedThreatProtection Onboarding Blob.
     *  @param string|null $value Value to set for the advancedThreatProtectionOnboardingBlob property.
    */
    public function setAdvancedThreatProtectionOnboardingBlob(?string $value ): void {
        $this->advancedThreatProtectionOnboardingBlob = $value;
    }

    /**
     * Sets the advancedThreatProtectionOnboardingFilename property value. Name of the file from which AdvancedThreatProtectionOnboardingBlob was obtained.
     *  @param string|null $value Value to set for the advancedThreatProtectionOnboardingFilename property.
    */
    public function setAdvancedThreatProtectionOnboardingFilename(?string $value ): void {
        $this->advancedThreatProtectionOnboardingFilename = $value;
    }

    /**
     * Sets the allowSampleSharing property value. Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
     *  @param bool|null $value Value to set for the allowSampleSharing property.
    */
    public function setAllowSampleSharing(?bool $value ): void {
        $this->allowSampleSharing = $value;
    }

    /**
     * Sets the enableExpeditedTelemetryReporting property value. Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
     *  @param bool|null $value Value to set for the enableExpeditedTelemetryReporting property.
    */
    public function setEnableExpeditedTelemetryReporting(?bool $value ): void {
        $this->enableExpeditedTelemetryReporting = $value;
    }

}
