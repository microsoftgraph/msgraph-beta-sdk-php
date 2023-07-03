<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class MacOSEndpointProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new MacOSEndpointProtectionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSEndpointProtectionConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSEndpointProtectionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSEndpointProtectionConfiguration {
        return new MacOSEndpointProtectionConfiguration();
    }

    /**
     * Gets the advancedThreatProtectionAutomaticSampleSubmission property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAdvancedThreatProtectionAutomaticSampleSubmission(): ?Enablement {
        $val = $this->getBackingStore()->get('advancedThreatProtectionAutomaticSampleSubmission');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionAutomaticSampleSubmission'");
    }

    /**
     * Gets the advancedThreatProtectionCloudDelivered property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAdvancedThreatProtectionCloudDelivered(): ?Enablement {
        $val = $this->getBackingStore()->get('advancedThreatProtectionCloudDelivered');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionCloudDelivered'");
    }

    /**
     * Gets the advancedThreatProtectionDiagnosticDataCollection property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAdvancedThreatProtectionDiagnosticDataCollection(): ?Enablement {
        $val = $this->getBackingStore()->get('advancedThreatProtectionDiagnosticDataCollection');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionDiagnosticDataCollection'");
    }

    /**
     * Gets the advancedThreatProtectionExcludedExtensions property value. A list of file extensions to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @return array<string>|null
    */
    public function getAdvancedThreatProtectionExcludedExtensions(): ?array {
        $val = $this->getBackingStore()->get('advancedThreatProtectionExcludedExtensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionExcludedExtensions'");
    }

    /**
     * Gets the advancedThreatProtectionExcludedFiles property value. A list of paths to files to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @return array<string>|null
    */
    public function getAdvancedThreatProtectionExcludedFiles(): ?array {
        $val = $this->getBackingStore()->get('advancedThreatProtectionExcludedFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionExcludedFiles'");
    }

    /**
     * Gets the advancedThreatProtectionExcludedFolders property value. A list of paths to folders to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @return array<string>|null
    */
    public function getAdvancedThreatProtectionExcludedFolders(): ?array {
        $val = $this->getBackingStore()->get('advancedThreatProtectionExcludedFolders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionExcludedFolders'");
    }

    /**
     * Gets the advancedThreatProtectionExcludedProcesses property value. A list of process names to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @return array<string>|null
    */
    public function getAdvancedThreatProtectionExcludedProcesses(): ?array {
        $val = $this->getBackingStore()->get('advancedThreatProtectionExcludedProcesses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionExcludedProcesses'");
    }

    /**
     * Gets the advancedThreatProtectionRealTime property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAdvancedThreatProtectionRealTime(): ?Enablement {
        $val = $this->getBackingStore()->get('advancedThreatProtectionRealTime');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionRealTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedThreatProtectionAutomaticSampleSubmission' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionAutomaticSampleSubmission($n->getEnumValue(Enablement::class)),
            'advancedThreatProtectionCloudDelivered' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionCloudDelivered($n->getEnumValue(Enablement::class)),
            'advancedThreatProtectionDiagnosticDataCollection' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionDiagnosticDataCollection($n->getEnumValue(Enablement::class)),
            'advancedThreatProtectionExcludedExtensions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdvancedThreatProtectionExcludedExtensions($val);
            },
            'advancedThreatProtectionExcludedFiles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdvancedThreatProtectionExcludedFiles($val);
            },
            'advancedThreatProtectionExcludedFolders' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdvancedThreatProtectionExcludedFolders($val);
            },
            'advancedThreatProtectionExcludedProcesses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdvancedThreatProtectionExcludedProcesses($val);
            },
            'advancedThreatProtectionRealTime' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionRealTime($n->getEnumValue(Enablement::class)),
            'fileVaultAllowDeferralUntilSignOut' => fn(ParseNode $n) => $o->setFileVaultAllowDeferralUntilSignOut($n->getBooleanValue()),
            'fileVaultDisablePromptAtSignOut' => fn(ParseNode $n) => $o->setFileVaultDisablePromptAtSignOut($n->getBooleanValue()),
            'fileVaultEnabled' => fn(ParseNode $n) => $o->setFileVaultEnabled($n->getBooleanValue()),
            'fileVaultHidePersonalRecoveryKey' => fn(ParseNode $n) => $o->setFileVaultHidePersonalRecoveryKey($n->getBooleanValue()),
            'fileVaultInstitutionalRecoveryKeyCertificate' => fn(ParseNode $n) => $o->setFileVaultInstitutionalRecoveryKeyCertificate($n->getBinaryContent()),
            'fileVaultInstitutionalRecoveryKeyCertificateFileName' => fn(ParseNode $n) => $o->setFileVaultInstitutionalRecoveryKeyCertificateFileName($n->getStringValue()),
            'fileVaultNumberOfTimesUserCanIgnore' => fn(ParseNode $n) => $o->setFileVaultNumberOfTimesUserCanIgnore($n->getIntegerValue()),
            'fileVaultPersonalRecoveryKeyHelpMessage' => fn(ParseNode $n) => $o->setFileVaultPersonalRecoveryKeyHelpMessage($n->getStringValue()),
            'fileVaultPersonalRecoveryKeyRotationInMonths' => fn(ParseNode $n) => $o->setFileVaultPersonalRecoveryKeyRotationInMonths($n->getIntegerValue()),
            'fileVaultSelectedRecoveryKeyTypes' => fn(ParseNode $n) => $o->setFileVaultSelectedRecoveryKeyTypes($n->getEnumValue(MacOSFileVaultRecoveryKeyTypes::class)),
            'firewallApplications' => fn(ParseNode $n) => $o->setFirewallApplications($n->getCollectionOfObjectValues([MacOSFirewallApplication::class, 'createFromDiscriminatorValue'])),
            'firewallBlockAllIncoming' => fn(ParseNode $n) => $o->setFirewallBlockAllIncoming($n->getBooleanValue()),
            'firewallEnabled' => fn(ParseNode $n) => $o->setFirewallEnabled($n->getBooleanValue()),
            'firewallEnableStealthMode' => fn(ParseNode $n) => $o->setFirewallEnableStealthMode($n->getBooleanValue()),
            'gatekeeperAllowedAppSource' => fn(ParseNode $n) => $o->setGatekeeperAllowedAppSource($n->getEnumValue(MacOSGatekeeperAppSources::class)),
            'gatekeeperBlockOverride' => fn(ParseNode $n) => $o->setGatekeeperBlockOverride($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the fileVaultAllowDeferralUntilSignOut property value. Optional. If set to true, the user can defer the enabling of FileVault until they sign out.
     * @return bool|null
    */
    public function getFileVaultAllowDeferralUntilSignOut(): ?bool {
        $val = $this->getBackingStore()->get('fileVaultAllowDeferralUntilSignOut');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultAllowDeferralUntilSignOut'");
    }

    /**
     * Gets the fileVaultDisablePromptAtSignOut property value. Optional. When using the Defer option, if set to true, the user is not prompted to enable FileVault at sign-out.
     * @return bool|null
    */
    public function getFileVaultDisablePromptAtSignOut(): ?bool {
        $val = $this->getBackingStore()->get('fileVaultDisablePromptAtSignOut');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultDisablePromptAtSignOut'");
    }

    /**
     * Gets the fileVaultEnabled property value. Whether FileVault should be enabled or not.
     * @return bool|null
    */
    public function getFileVaultEnabled(): ?bool {
        $val = $this->getBackingStore()->get('fileVaultEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultEnabled'");
    }

    /**
     * Gets the fileVaultHidePersonalRecoveryKey property value. Optional. A hidden personal recovery key does not appear on the user's screen during FileVault encryption, reducing the risk of it ending up in the wrong hands.
     * @return bool|null
    */
    public function getFileVaultHidePersonalRecoveryKey(): ?bool {
        $val = $this->getBackingStore()->get('fileVaultHidePersonalRecoveryKey');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultHidePersonalRecoveryKey'");
    }

    /**
     * Gets the fileVaultInstitutionalRecoveryKeyCertificate property value. Required if selected recovery key type(s) include InstitutionalRecoveryKey. The DER Encoded certificate file used to set an institutional recovery key.
     * @return StreamInterface|null
    */
    public function getFileVaultInstitutionalRecoveryKeyCertificate(): ?StreamInterface {
        $val = $this->getBackingStore()->get('fileVaultInstitutionalRecoveryKeyCertificate');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultInstitutionalRecoveryKeyCertificate'");
    }

    /**
     * Gets the fileVaultInstitutionalRecoveryKeyCertificateFileName property value. File name of the institutional recovery key certificate to display in UI. (.der).
     * @return string|null
    */
    public function getFileVaultInstitutionalRecoveryKeyCertificateFileName(): ?string {
        $val = $this->getBackingStore()->get('fileVaultInstitutionalRecoveryKeyCertificateFileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultInstitutionalRecoveryKeyCertificateFileName'");
    }

    /**
     * Gets the fileVaultNumberOfTimesUserCanIgnore property value. Optional. When using the Defer option, this is the maximum number of times the user can ignore prompts to enable FileVault before FileVault will be required for the user to sign in. If set to -1, it will always prompt to enable FileVault until FileVault is enabled, though it will allow the user to bypass enabling FileVault. Setting this to 0 will disable the feature.
     * @return int|null
    */
    public function getFileVaultNumberOfTimesUserCanIgnore(): ?int {
        $val = $this->getBackingStore()->get('fileVaultNumberOfTimesUserCanIgnore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultNumberOfTimesUserCanIgnore'");
    }

    /**
     * Gets the fileVaultPersonalRecoveryKeyHelpMessage property value. Required if selected recovery key type(s) include PersonalRecoveryKey. A short message displayed to the user that explains how they can retrieve their personal recovery key.
     * @return string|null
    */
    public function getFileVaultPersonalRecoveryKeyHelpMessage(): ?string {
        $val = $this->getBackingStore()->get('fileVaultPersonalRecoveryKeyHelpMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultPersonalRecoveryKeyHelpMessage'");
    }

    /**
     * Gets the fileVaultPersonalRecoveryKeyRotationInMonths property value. Optional. If selected recovery key type(s) include PersonalRecoveryKey, the frequency to rotate that key, in months.
     * @return int|null
    */
    public function getFileVaultPersonalRecoveryKeyRotationInMonths(): ?int {
        $val = $this->getBackingStore()->get('fileVaultPersonalRecoveryKeyRotationInMonths');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultPersonalRecoveryKeyRotationInMonths'");
    }

    /**
     * Gets the fileVaultSelectedRecoveryKeyTypes property value. Recovery key types for macOS FileVault
     * @return MacOSFileVaultRecoveryKeyTypes|null
    */
    public function getFileVaultSelectedRecoveryKeyTypes(): ?MacOSFileVaultRecoveryKeyTypes {
        $val = $this->getBackingStore()->get('fileVaultSelectedRecoveryKeyTypes');
        if (is_null($val) || $val instanceof MacOSFileVaultRecoveryKeyTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultSelectedRecoveryKeyTypes'");
    }

    /**
     * Gets the firewallApplications property value. List of applications with firewall settings. Firewall settings for applications not on this list are determined by the user. This collection can contain a maximum of 500 elements.
     * @return array<MacOSFirewallApplication>|null
    */
    public function getFirewallApplications(): ?array {
        $val = $this->getBackingStore()->get('firewallApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MacOSFirewallApplication::class);
            /** @var array<MacOSFirewallApplication>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallApplications'");
    }

    /**
     * Gets the firewallBlockAllIncoming property value. Corresponds to the 'Block all incoming connections' option.
     * @return bool|null
    */
    public function getFirewallBlockAllIncoming(): ?bool {
        $val = $this->getBackingStore()->get('firewallBlockAllIncoming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallBlockAllIncoming'");
    }

    /**
     * Gets the firewallEnabled property value. Whether the firewall should be enabled or not.
     * @return bool|null
    */
    public function getFirewallEnabled(): ?bool {
        $val = $this->getBackingStore()->get('firewallEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallEnabled'");
    }

    /**
     * Gets the firewallEnableStealthMode property value. Corresponds to 'Enable stealth mode.'
     * @return bool|null
    */
    public function getFirewallEnableStealthMode(): ?bool {
        $val = $this->getBackingStore()->get('firewallEnableStealthMode');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallEnableStealthMode'");
    }

    /**
     * Gets the gatekeeperAllowedAppSource property value. App source options for macOS Gatekeeper.
     * @return MacOSGatekeeperAppSources|null
    */
    public function getGatekeeperAllowedAppSource(): ?MacOSGatekeeperAppSources {
        $val = $this->getBackingStore()->get('gatekeeperAllowedAppSource');
        if (is_null($val) || $val instanceof MacOSGatekeeperAppSources) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gatekeeperAllowedAppSource'");
    }

    /**
     * Gets the gatekeeperBlockOverride property value. If set to true, the user override for Gatekeeper will be disabled.
     * @return bool|null
    */
    public function getGatekeeperBlockOverride(): ?bool {
        $val = $this->getBackingStore()->get('gatekeeperBlockOverride');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gatekeeperBlockOverride'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('advancedThreatProtectionAutomaticSampleSubmission', $this->getAdvancedThreatProtectionAutomaticSampleSubmission());
        $writer->writeEnumValue('advancedThreatProtectionCloudDelivered', $this->getAdvancedThreatProtectionCloudDelivered());
        $writer->writeEnumValue('advancedThreatProtectionDiagnosticDataCollection', $this->getAdvancedThreatProtectionDiagnosticDataCollection());
        $writer->writeCollectionOfPrimitiveValues('advancedThreatProtectionExcludedExtensions', $this->getAdvancedThreatProtectionExcludedExtensions());
        $writer->writeCollectionOfPrimitiveValues('advancedThreatProtectionExcludedFiles', $this->getAdvancedThreatProtectionExcludedFiles());
        $writer->writeCollectionOfPrimitiveValues('advancedThreatProtectionExcludedFolders', $this->getAdvancedThreatProtectionExcludedFolders());
        $writer->writeCollectionOfPrimitiveValues('advancedThreatProtectionExcludedProcesses', $this->getAdvancedThreatProtectionExcludedProcesses());
        $writer->writeEnumValue('advancedThreatProtectionRealTime', $this->getAdvancedThreatProtectionRealTime());
        $writer->writeBooleanValue('fileVaultAllowDeferralUntilSignOut', $this->getFileVaultAllowDeferralUntilSignOut());
        $writer->writeBooleanValue('fileVaultDisablePromptAtSignOut', $this->getFileVaultDisablePromptAtSignOut());
        $writer->writeBooleanValue('fileVaultEnabled', $this->getFileVaultEnabled());
        $writer->writeBooleanValue('fileVaultHidePersonalRecoveryKey', $this->getFileVaultHidePersonalRecoveryKey());
        $writer->writeBinaryContent('fileVaultInstitutionalRecoveryKeyCertificate', $this->getFileVaultInstitutionalRecoveryKeyCertificate());
        $writer->writeStringValue('fileVaultInstitutionalRecoveryKeyCertificateFileName', $this->getFileVaultInstitutionalRecoveryKeyCertificateFileName());
        $writer->writeIntegerValue('fileVaultNumberOfTimesUserCanIgnore', $this->getFileVaultNumberOfTimesUserCanIgnore());
        $writer->writeStringValue('fileVaultPersonalRecoveryKeyHelpMessage', $this->getFileVaultPersonalRecoveryKeyHelpMessage());
        $writer->writeIntegerValue('fileVaultPersonalRecoveryKeyRotationInMonths', $this->getFileVaultPersonalRecoveryKeyRotationInMonths());
        $writer->writeEnumValue('fileVaultSelectedRecoveryKeyTypes', $this->getFileVaultSelectedRecoveryKeyTypes());
        $writer->writeCollectionOfObjectValues('firewallApplications', $this->getFirewallApplications());
        $writer->writeBooleanValue('firewallBlockAllIncoming', $this->getFirewallBlockAllIncoming());
        $writer->writeBooleanValue('firewallEnabled', $this->getFirewallEnabled());
        $writer->writeBooleanValue('firewallEnableStealthMode', $this->getFirewallEnableStealthMode());
        $writer->writeEnumValue('gatekeeperAllowedAppSource', $this->getGatekeeperAllowedAppSource());
        $writer->writeBooleanValue('gatekeeperBlockOverride', $this->getGatekeeperBlockOverride());
    }

    /**
     * Sets the advancedThreatProtectionAutomaticSampleSubmission property value. Possible values of a property
     * @param Enablement|null $value Value to set for the advancedThreatProtectionAutomaticSampleSubmission property.
    */
    public function setAdvancedThreatProtectionAutomaticSampleSubmission(?Enablement $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionAutomaticSampleSubmission', $value);
    }

    /**
     * Sets the advancedThreatProtectionCloudDelivered property value. Possible values of a property
     * @param Enablement|null $value Value to set for the advancedThreatProtectionCloudDelivered property.
    */
    public function setAdvancedThreatProtectionCloudDelivered(?Enablement $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionCloudDelivered', $value);
    }

    /**
     * Sets the advancedThreatProtectionDiagnosticDataCollection property value. Possible values of a property
     * @param Enablement|null $value Value to set for the advancedThreatProtectionDiagnosticDataCollection property.
    */
    public function setAdvancedThreatProtectionDiagnosticDataCollection(?Enablement $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionDiagnosticDataCollection', $value);
    }

    /**
     * Sets the advancedThreatProtectionExcludedExtensions property value. A list of file extensions to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @param array<string>|null $value Value to set for the advancedThreatProtectionExcludedExtensions property.
    */
    public function setAdvancedThreatProtectionExcludedExtensions(?array $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionExcludedExtensions', $value);
    }

    /**
     * Sets the advancedThreatProtectionExcludedFiles property value. A list of paths to files to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @param array<string>|null $value Value to set for the advancedThreatProtectionExcludedFiles property.
    */
    public function setAdvancedThreatProtectionExcludedFiles(?array $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionExcludedFiles', $value);
    }

    /**
     * Sets the advancedThreatProtectionExcludedFolders property value. A list of paths to folders to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @param array<string>|null $value Value to set for the advancedThreatProtectionExcludedFolders property.
    */
    public function setAdvancedThreatProtectionExcludedFolders(?array $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionExcludedFolders', $value);
    }

    /**
     * Sets the advancedThreatProtectionExcludedProcesses property value. A list of process names to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @param array<string>|null $value Value to set for the advancedThreatProtectionExcludedProcesses property.
    */
    public function setAdvancedThreatProtectionExcludedProcesses(?array $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionExcludedProcesses', $value);
    }

    /**
     * Sets the advancedThreatProtectionRealTime property value. Possible values of a property
     * @param Enablement|null $value Value to set for the advancedThreatProtectionRealTime property.
    */
    public function setAdvancedThreatProtectionRealTime(?Enablement $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionRealTime', $value);
    }

    /**
     * Sets the fileVaultAllowDeferralUntilSignOut property value. Optional. If set to true, the user can defer the enabling of FileVault until they sign out.
     * @param bool|null $value Value to set for the fileVaultAllowDeferralUntilSignOut property.
    */
    public function setFileVaultAllowDeferralUntilSignOut(?bool $value): void {
        $this->getBackingStore()->set('fileVaultAllowDeferralUntilSignOut', $value);
    }

    /**
     * Sets the fileVaultDisablePromptAtSignOut property value. Optional. When using the Defer option, if set to true, the user is not prompted to enable FileVault at sign-out.
     * @param bool|null $value Value to set for the fileVaultDisablePromptAtSignOut property.
    */
    public function setFileVaultDisablePromptAtSignOut(?bool $value): void {
        $this->getBackingStore()->set('fileVaultDisablePromptAtSignOut', $value);
    }

    /**
     * Sets the fileVaultEnabled property value. Whether FileVault should be enabled or not.
     * @param bool|null $value Value to set for the fileVaultEnabled property.
    */
    public function setFileVaultEnabled(?bool $value): void {
        $this->getBackingStore()->set('fileVaultEnabled', $value);
    }

    /**
     * Sets the fileVaultHidePersonalRecoveryKey property value. Optional. A hidden personal recovery key does not appear on the user's screen during FileVault encryption, reducing the risk of it ending up in the wrong hands.
     * @param bool|null $value Value to set for the fileVaultHidePersonalRecoveryKey property.
    */
    public function setFileVaultHidePersonalRecoveryKey(?bool $value): void {
        $this->getBackingStore()->set('fileVaultHidePersonalRecoveryKey', $value);
    }

    /**
     * Sets the fileVaultInstitutionalRecoveryKeyCertificate property value. Required if selected recovery key type(s) include InstitutionalRecoveryKey. The DER Encoded certificate file used to set an institutional recovery key.
     * @param StreamInterface|null $value Value to set for the fileVaultInstitutionalRecoveryKeyCertificate property.
    */
    public function setFileVaultInstitutionalRecoveryKeyCertificate(?StreamInterface $value): void {
        $this->getBackingStore()->set('fileVaultInstitutionalRecoveryKeyCertificate', $value);
    }

    /**
     * Sets the fileVaultInstitutionalRecoveryKeyCertificateFileName property value. File name of the institutional recovery key certificate to display in UI. (.der).
     * @param string|null $value Value to set for the fileVaultInstitutionalRecoveryKeyCertificateFileName property.
    */
    public function setFileVaultInstitutionalRecoveryKeyCertificateFileName(?string $value): void {
        $this->getBackingStore()->set('fileVaultInstitutionalRecoveryKeyCertificateFileName', $value);
    }

    /**
     * Sets the fileVaultNumberOfTimesUserCanIgnore property value. Optional. When using the Defer option, this is the maximum number of times the user can ignore prompts to enable FileVault before FileVault will be required for the user to sign in. If set to -1, it will always prompt to enable FileVault until FileVault is enabled, though it will allow the user to bypass enabling FileVault. Setting this to 0 will disable the feature.
     * @param int|null $value Value to set for the fileVaultNumberOfTimesUserCanIgnore property.
    */
    public function setFileVaultNumberOfTimesUserCanIgnore(?int $value): void {
        $this->getBackingStore()->set('fileVaultNumberOfTimesUserCanIgnore', $value);
    }

    /**
     * Sets the fileVaultPersonalRecoveryKeyHelpMessage property value. Required if selected recovery key type(s) include PersonalRecoveryKey. A short message displayed to the user that explains how they can retrieve their personal recovery key.
     * @param string|null $value Value to set for the fileVaultPersonalRecoveryKeyHelpMessage property.
    */
    public function setFileVaultPersonalRecoveryKeyHelpMessage(?string $value): void {
        $this->getBackingStore()->set('fileVaultPersonalRecoveryKeyHelpMessage', $value);
    }

    /**
     * Sets the fileVaultPersonalRecoveryKeyRotationInMonths property value. Optional. If selected recovery key type(s) include PersonalRecoveryKey, the frequency to rotate that key, in months.
     * @param int|null $value Value to set for the fileVaultPersonalRecoveryKeyRotationInMonths property.
    */
    public function setFileVaultPersonalRecoveryKeyRotationInMonths(?int $value): void {
        $this->getBackingStore()->set('fileVaultPersonalRecoveryKeyRotationInMonths', $value);
    }

    /**
     * Sets the fileVaultSelectedRecoveryKeyTypes property value. Recovery key types for macOS FileVault
     * @param MacOSFileVaultRecoveryKeyTypes|null $value Value to set for the fileVaultSelectedRecoveryKeyTypes property.
    */
    public function setFileVaultSelectedRecoveryKeyTypes(?MacOSFileVaultRecoveryKeyTypes $value): void {
        $this->getBackingStore()->set('fileVaultSelectedRecoveryKeyTypes', $value);
    }

    /**
     * Sets the firewallApplications property value. List of applications with firewall settings. Firewall settings for applications not on this list are determined by the user. This collection can contain a maximum of 500 elements.
     * @param array<MacOSFirewallApplication>|null $value Value to set for the firewallApplications property.
    */
    public function setFirewallApplications(?array $value): void {
        $this->getBackingStore()->set('firewallApplications', $value);
    }

    /**
     * Sets the firewallBlockAllIncoming property value. Corresponds to the 'Block all incoming connections' option.
     * @param bool|null $value Value to set for the firewallBlockAllIncoming property.
    */
    public function setFirewallBlockAllIncoming(?bool $value): void {
        $this->getBackingStore()->set('firewallBlockAllIncoming', $value);
    }

    /**
     * Sets the firewallEnabled property value. Whether the firewall should be enabled or not.
     * @param bool|null $value Value to set for the firewallEnabled property.
    */
    public function setFirewallEnabled(?bool $value): void {
        $this->getBackingStore()->set('firewallEnabled', $value);
    }

    /**
     * Sets the firewallEnableStealthMode property value. Corresponds to 'Enable stealth mode.'
     * @param bool|null $value Value to set for the firewallEnableStealthMode property.
    */
    public function setFirewallEnableStealthMode(?bool $value): void {
        $this->getBackingStore()->set('firewallEnableStealthMode', $value);
    }

    /**
     * Sets the gatekeeperAllowedAppSource property value. App source options for macOS Gatekeeper.
     * @param MacOSGatekeeperAppSources|null $value Value to set for the gatekeeperAllowedAppSource property.
    */
    public function setGatekeeperAllowedAppSource(?MacOSGatekeeperAppSources $value): void {
        $this->getBackingStore()->set('gatekeeperAllowedAppSource', $value);
    }

    /**
     * Sets the gatekeeperBlockOverride property value. If set to true, the user override for Gatekeeper will be disabled.
     * @param bool|null $value Value to set for the gatekeeperBlockOverride property.
    */
    public function setGatekeeperBlockOverride(?bool $value): void {
        $this->getBackingStore()->set('gatekeeperBlockOverride', $value);
    }

}
