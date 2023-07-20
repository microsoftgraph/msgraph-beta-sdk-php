<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows Defender AdvancedThreatProtection Configuration.
*/
class WindowsDefenderAdvancedThreatProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new windowsDefenderAdvancedThreatProtectionConfiguration and sets the default values.
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
        $val = $this->getBackingStore()->get('advancedThreatProtectionAutoPopulateOnboardingBlob');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionAutoPopulateOnboardingBlob'");
    }

    /**
     * Gets the advancedThreatProtectionOffboardingBlob property value. Windows Defender AdvancedThreatProtection Offboarding Blob.
     * @return string|null
    */
    public function getAdvancedThreatProtectionOffboardingBlob(): ?string {
        $val = $this->getBackingStore()->get('advancedThreatProtectionOffboardingBlob');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionOffboardingBlob'");
    }

    /**
     * Gets the advancedThreatProtectionOffboardingFilename property value. Name of the file from which AdvancedThreatProtectionOffboardingBlob was obtained.
     * @return string|null
    */
    public function getAdvancedThreatProtectionOffboardingFilename(): ?string {
        $val = $this->getBackingStore()->get('advancedThreatProtectionOffboardingFilename');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionOffboardingFilename'");
    }

    /**
     * Gets the advancedThreatProtectionOnboardingBlob property value. Windows Defender AdvancedThreatProtection Onboarding Blob.
     * @return string|null
    */
    public function getAdvancedThreatProtectionOnboardingBlob(): ?string {
        $val = $this->getBackingStore()->get('advancedThreatProtectionOnboardingBlob');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionOnboardingBlob'");
    }

    /**
     * Gets the advancedThreatProtectionOnboardingFilename property value. Name of the file from which AdvancedThreatProtectionOnboardingBlob was obtained.
     * @return string|null
    */
    public function getAdvancedThreatProtectionOnboardingFilename(): ?string {
        $val = $this->getBackingStore()->get('advancedThreatProtectionOnboardingFilename');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionOnboardingFilename'");
    }

    /**
     * Gets the allowSampleSharing property value. Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
     * @return bool|null
    */
    public function getAllowSampleSharing(): ?bool {
        $val = $this->getBackingStore()->get('allowSampleSharing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowSampleSharing'");
    }

    /**
     * Gets the enableExpeditedTelemetryReporting property value. Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
     * @return bool|null
    */
    public function getEnableExpeditedTelemetryReporting(): ?bool {
        $val = $this->getBackingStore()->get('enableExpeditedTelemetryReporting');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableExpeditedTelemetryReporting'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedThreatProtectionAutoPopulateOnboardingBlob' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionAutoPopulateOnboardingBlob($n->getBooleanValue()),
            'advancedThreatProtectionOffboardingBlob' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionOffboardingBlob($n->getStringValue()),
            'advancedThreatProtectionOffboardingFilename' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionOffboardingFilename($n->getStringValue()),
            'advancedThreatProtectionOnboardingBlob' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionOnboardingBlob($n->getStringValue()),
            'advancedThreatProtectionOnboardingFilename' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionOnboardingFilename($n->getStringValue()),
            'allowSampleSharing' => fn(ParseNode $n) => $o->setAllowSampleSharing($n->getBooleanValue()),
            'enableExpeditedTelemetryReporting' => fn(ParseNode $n) => $o->setEnableExpeditedTelemetryReporting($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('advancedThreatProtectionAutoPopulateOnboardingBlob', $this->getAdvancedThreatProtectionAutoPopulateOnboardingBlob());
        $writer->writeStringValue('advancedThreatProtectionOffboardingBlob', $this->getAdvancedThreatProtectionOffboardingBlob());
        $writer->writeStringValue('advancedThreatProtectionOffboardingFilename', $this->getAdvancedThreatProtectionOffboardingFilename());
        $writer->writeStringValue('advancedThreatProtectionOnboardingBlob', $this->getAdvancedThreatProtectionOnboardingBlob());
        $writer->writeStringValue('advancedThreatProtectionOnboardingFilename', $this->getAdvancedThreatProtectionOnboardingFilename());
        $writer->writeBooleanValue('allowSampleSharing', $this->getAllowSampleSharing());
        $writer->writeBooleanValue('enableExpeditedTelemetryReporting', $this->getEnableExpeditedTelemetryReporting());
    }

    /**
     * Sets the advancedThreatProtectionAutoPopulateOnboardingBlob property value. Auto populate onboarding blob programmatically from Advanced Threat protection service
     * @param bool|null $value Value to set for the advancedThreatProtectionAutoPopulateOnboardingBlob property.
    */
    public function setAdvancedThreatProtectionAutoPopulateOnboardingBlob(?bool $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionAutoPopulateOnboardingBlob', $value);
    }

    /**
     * Sets the advancedThreatProtectionOffboardingBlob property value. Windows Defender AdvancedThreatProtection Offboarding Blob.
     * @param string|null $value Value to set for the advancedThreatProtectionOffboardingBlob property.
    */
    public function setAdvancedThreatProtectionOffboardingBlob(?string $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionOffboardingBlob', $value);
    }

    /**
     * Sets the advancedThreatProtectionOffboardingFilename property value. Name of the file from which AdvancedThreatProtectionOffboardingBlob was obtained.
     * @param string|null $value Value to set for the advancedThreatProtectionOffboardingFilename property.
    */
    public function setAdvancedThreatProtectionOffboardingFilename(?string $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionOffboardingFilename', $value);
    }

    /**
     * Sets the advancedThreatProtectionOnboardingBlob property value. Windows Defender AdvancedThreatProtection Onboarding Blob.
     * @param string|null $value Value to set for the advancedThreatProtectionOnboardingBlob property.
    */
    public function setAdvancedThreatProtectionOnboardingBlob(?string $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionOnboardingBlob', $value);
    }

    /**
     * Sets the advancedThreatProtectionOnboardingFilename property value. Name of the file from which AdvancedThreatProtectionOnboardingBlob was obtained.
     * @param string|null $value Value to set for the advancedThreatProtectionOnboardingFilename property.
    */
    public function setAdvancedThreatProtectionOnboardingFilename(?string $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionOnboardingFilename', $value);
    }

    /**
     * Sets the allowSampleSharing property value. Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
     * @param bool|null $value Value to set for the allowSampleSharing property.
    */
    public function setAllowSampleSharing(?bool $value): void {
        $this->getBackingStore()->set('allowSampleSharing', $value);
    }

    /**
     * Sets the enableExpeditedTelemetryReporting property value. Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
     * @param bool|null $value Value to set for the enableExpeditedTelemetryReporting property.
    */
    public function setEnableExpeditedTelemetryReporting(?bool $value): void {
        $this->getBackingStore()->set('enableExpeditedTelemetryReporting', $value);
    }

}
