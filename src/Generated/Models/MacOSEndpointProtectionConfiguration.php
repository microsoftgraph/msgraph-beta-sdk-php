<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class MacOSEndpointProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var Enablement|null $advancedThreatProtectionAutomaticSampleSubmission Possible values of a property
    */
    private ?Enablement $advancedThreatProtectionAutomaticSampleSubmission = null;
    
    /**
     * @var Enablement|null $advancedThreatProtectionCloudDelivered Possible values of a property
    */
    private ?Enablement $advancedThreatProtectionCloudDelivered = null;
    
    /**
     * @var Enablement|null $advancedThreatProtectionDiagnosticDataCollection Possible values of a property
    */
    private ?Enablement $advancedThreatProtectionDiagnosticDataCollection = null;
    
    /**
     * @var array<string>|null $advancedThreatProtectionExcludedExtensions A list of file extensions to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    */
    private ?array $advancedThreatProtectionExcludedExtensions = null;
    
    /**
     * @var array<string>|null $advancedThreatProtectionExcludedFiles A list of paths to files to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    */
    private ?array $advancedThreatProtectionExcludedFiles = null;
    
    /**
     * @var array<string>|null $advancedThreatProtectionExcludedFolders A list of paths to folders to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    */
    private ?array $advancedThreatProtectionExcludedFolders = null;
    
    /**
     * @var array<string>|null $advancedThreatProtectionExcludedProcesses A list of process names to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    */
    private ?array $advancedThreatProtectionExcludedProcesses = null;
    
    /**
     * @var Enablement|null $advancedThreatProtectionRealTime Possible values of a property
    */
    private ?Enablement $advancedThreatProtectionRealTime = null;
    
    /**
     * @var bool|null $fileVaultAllowDeferralUntilSignOut Optional. If set to true, the user can defer the enabling of FileVault until they sign out.
    */
    private ?bool $fileVaultAllowDeferralUntilSignOut = null;
    
    /**
     * @var bool|null $fileVaultDisablePromptAtSignOut Optional. When using the Defer option, if set to true, the user is not prompted to enable FileVault at sign-out.
    */
    private ?bool $fileVaultDisablePromptAtSignOut = null;
    
    /**
     * @var bool|null $fileVaultEnabled Whether FileVault should be enabled or not.
    */
    private ?bool $fileVaultEnabled = null;
    
    /**
     * @var bool|null $fileVaultHidePersonalRecoveryKey Optional. A hidden personal recovery key does not appear on the user's screen during FileVault encryption, reducing the risk of it ending up in the wrong hands.
    */
    private ?bool $fileVaultHidePersonalRecoveryKey = null;
    
    /**
     * @var StreamInterface|null $fileVaultInstitutionalRecoveryKeyCertificate Required if selected recovery key type(s) include InstitutionalRecoveryKey. The DER Encoded certificate file used to set an institutional recovery key.
    */
    private ?StreamInterface $fileVaultInstitutionalRecoveryKeyCertificate = null;
    
    /**
     * @var string|null $fileVaultInstitutionalRecoveryKeyCertificateFileName File name of the institutional recovery key certificate to display in UI. (.der).
    */
    private ?string $fileVaultInstitutionalRecoveryKeyCertificateFileName = null;
    
    /**
     * @var int|null $fileVaultNumberOfTimesUserCanIgnore Optional. When using the Defer option, this is the maximum number of times the user can ignore prompts to enable FileVault before FileVault will be required for the user to sign in. If set to -1, it will always prompt to enable FileVault until FileVault is enabled, though it will allow the user to bypass enabling FileVault. Setting this to 0 will disable the feature.
    */
    private ?int $fileVaultNumberOfTimesUserCanIgnore = null;
    
    /**
     * @var string|null $fileVaultPersonalRecoveryKeyHelpMessage Required if selected recovery key type(s) include PersonalRecoveryKey. A short message displayed to the user that explains how they can retrieve their personal recovery key.
    */
    private ?string $fileVaultPersonalRecoveryKeyHelpMessage = null;
    
    /**
     * @var int|null $fileVaultPersonalRecoveryKeyRotationInMonths Optional. If selected recovery key type(s) include PersonalRecoveryKey, the frequency to rotate that key, in months.
    */
    private ?int $fileVaultPersonalRecoveryKeyRotationInMonths = null;
    
    /**
     * @var MacOSFileVaultRecoveryKeyTypes|null $fileVaultSelectedRecoveryKeyTypes Recovery key types for macOS FileVault
    */
    private ?MacOSFileVaultRecoveryKeyTypes $fileVaultSelectedRecoveryKeyTypes = null;
    
    /**
     * @var array<MacOSFirewallApplication>|null $firewallApplications List of applications with firewall settings. Firewall settings for applications not on this list are determined by the user. This collection can contain a maximum of 500 elements.
    */
    private ?array $firewallApplications = null;
    
    /**
     * @var bool|null $firewallBlockAllIncoming Corresponds to the 'Block all incoming connections' option.
    */
    private ?bool $firewallBlockAllIncoming = null;
    
    /**
     * @var bool|null $firewallEnabled Whether the firewall should be enabled or not.
    */
    private ?bool $firewallEnabled = null;
    
    /**
     * @var bool|null $firewallEnableStealthMode Corresponds to 'Enable stealth mode.'
    */
    private ?bool $firewallEnableStealthMode = null;
    
    /**
     * @var MacOSGatekeeperAppSources|null $gatekeeperAllowedAppSource App source options for macOS Gatekeeper.
    */
    private ?MacOSGatekeeperAppSources $gatekeeperAllowedAppSource = null;
    
    /**
     * @var bool|null $gatekeeperBlockOverride If set to true, the user override for Gatekeeper will be disabled.
    */
    private ?bool $gatekeeperBlockOverride = null;
    
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
        return $this->advancedThreatProtectionAutomaticSampleSubmission;
    }

    /**
     * Gets the advancedThreatProtectionCloudDelivered property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAdvancedThreatProtectionCloudDelivered(): ?Enablement {
        return $this->advancedThreatProtectionCloudDelivered;
    }

    /**
     * Gets the advancedThreatProtectionDiagnosticDataCollection property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAdvancedThreatProtectionDiagnosticDataCollection(): ?Enablement {
        return $this->advancedThreatProtectionDiagnosticDataCollection;
    }

    /**
     * Gets the advancedThreatProtectionExcludedExtensions property value. A list of file extensions to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @return array<string>|null
    */
    public function getAdvancedThreatProtectionExcludedExtensions(): ?array {
        return $this->advancedThreatProtectionExcludedExtensions;
    }

    /**
     * Gets the advancedThreatProtectionExcludedFiles property value. A list of paths to files to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @return array<string>|null
    */
    public function getAdvancedThreatProtectionExcludedFiles(): ?array {
        return $this->advancedThreatProtectionExcludedFiles;
    }

    /**
     * Gets the advancedThreatProtectionExcludedFolders property value. A list of paths to folders to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @return array<string>|null
    */
    public function getAdvancedThreatProtectionExcludedFolders(): ?array {
        return $this->advancedThreatProtectionExcludedFolders;
    }

    /**
     * Gets the advancedThreatProtectionExcludedProcesses property value. A list of process names to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     * @return array<string>|null
    */
    public function getAdvancedThreatProtectionExcludedProcesses(): ?array {
        return $this->advancedThreatProtectionExcludedProcesses;
    }

    /**
     * Gets the advancedThreatProtectionRealTime property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAdvancedThreatProtectionRealTime(): ?Enablement {
        return $this->advancedThreatProtectionRealTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedThreatProtectionAutomaticSampleSubmission' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionAutomaticSampleSubmission($n->getEnumValue(Enablement::class)); },
            'advancedThreatProtectionCloudDelivered' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionCloudDelivered($n->getEnumValue(Enablement::class)); },
            'advancedThreatProtectionDiagnosticDataCollection' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionDiagnosticDataCollection($n->getEnumValue(Enablement::class)); },
            'advancedThreatProtectionExcludedExtensions' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionExcludedExtensions($n->getCollectionOfPrimitiveValues()); },
            'advancedThreatProtectionExcludedFiles' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionExcludedFiles($n->getCollectionOfPrimitiveValues()); },
            'advancedThreatProtectionExcludedFolders' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionExcludedFolders($n->getCollectionOfPrimitiveValues()); },
            'advancedThreatProtectionExcludedProcesses' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionExcludedProcesses($n->getCollectionOfPrimitiveValues()); },
            'advancedThreatProtectionRealTime' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionRealTime($n->getEnumValue(Enablement::class)); },
            'fileVaultAllowDeferralUntilSignOut' => function (ParseNode $n) use ($o) { $o->setFileVaultAllowDeferralUntilSignOut($n->getBooleanValue()); },
            'fileVaultDisablePromptAtSignOut' => function (ParseNode $n) use ($o) { $o->setFileVaultDisablePromptAtSignOut($n->getBooleanValue()); },
            'fileVaultEnabled' => function (ParseNode $n) use ($o) { $o->setFileVaultEnabled($n->getBooleanValue()); },
            'fileVaultHidePersonalRecoveryKey' => function (ParseNode $n) use ($o) { $o->setFileVaultHidePersonalRecoveryKey($n->getBooleanValue()); },
            'fileVaultInstitutionalRecoveryKeyCertificate' => function (ParseNode $n) use ($o) { $o->setFileVaultInstitutionalRecoveryKeyCertificate($n->getBinaryContent()); },
            'fileVaultInstitutionalRecoveryKeyCertificateFileName' => function (ParseNode $n) use ($o) { $o->setFileVaultInstitutionalRecoveryKeyCertificateFileName($n->getStringValue()); },
            'fileVaultNumberOfTimesUserCanIgnore' => function (ParseNode $n) use ($o) { $o->setFileVaultNumberOfTimesUserCanIgnore($n->getIntegerValue()); },
            'fileVaultPersonalRecoveryKeyHelpMessage' => function (ParseNode $n) use ($o) { $o->setFileVaultPersonalRecoveryKeyHelpMessage($n->getStringValue()); },
            'fileVaultPersonalRecoveryKeyRotationInMonths' => function (ParseNode $n) use ($o) { $o->setFileVaultPersonalRecoveryKeyRotationInMonths($n->getIntegerValue()); },
            'fileVaultSelectedRecoveryKeyTypes' => function (ParseNode $n) use ($o) { $o->setFileVaultSelectedRecoveryKeyTypes($n->getEnumValue(MacOSFileVaultRecoveryKeyTypes::class)); },
            'firewallApplications' => function (ParseNode $n) use ($o) { $o->setFirewallApplications($n->getCollectionOfObjectValues(array(MacOSFirewallApplication::class, 'createFromDiscriminatorValue'))); },
            'firewallBlockAllIncoming' => function (ParseNode $n) use ($o) { $o->setFirewallBlockAllIncoming($n->getBooleanValue()); },
            'firewallEnabled' => function (ParseNode $n) use ($o) { $o->setFirewallEnabled($n->getBooleanValue()); },
            'firewallEnableStealthMode' => function (ParseNode $n) use ($o) { $o->setFirewallEnableStealthMode($n->getBooleanValue()); },
            'gatekeeperAllowedAppSource' => function (ParseNode $n) use ($o) { $o->setGatekeeperAllowedAppSource($n->getEnumValue(MacOSGatekeeperAppSources::class)); },
            'gatekeeperBlockOverride' => function (ParseNode $n) use ($o) { $o->setGatekeeperBlockOverride($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the fileVaultAllowDeferralUntilSignOut property value. Optional. If set to true, the user can defer the enabling of FileVault until they sign out.
     * @return bool|null
    */
    public function getFileVaultAllowDeferralUntilSignOut(): ?bool {
        return $this->fileVaultAllowDeferralUntilSignOut;
    }

    /**
     * Gets the fileVaultDisablePromptAtSignOut property value. Optional. When using the Defer option, if set to true, the user is not prompted to enable FileVault at sign-out.
     * @return bool|null
    */
    public function getFileVaultDisablePromptAtSignOut(): ?bool {
        return $this->fileVaultDisablePromptAtSignOut;
    }

    /**
     * Gets the fileVaultEnabled property value. Whether FileVault should be enabled or not.
     * @return bool|null
    */
    public function getFileVaultEnabled(): ?bool {
        return $this->fileVaultEnabled;
    }

    /**
     * Gets the fileVaultHidePersonalRecoveryKey property value. Optional. A hidden personal recovery key does not appear on the user's screen during FileVault encryption, reducing the risk of it ending up in the wrong hands.
     * @return bool|null
    */
    public function getFileVaultHidePersonalRecoveryKey(): ?bool {
        return $this->fileVaultHidePersonalRecoveryKey;
    }

    /**
     * Gets the fileVaultInstitutionalRecoveryKeyCertificate property value. Required if selected recovery key type(s) include InstitutionalRecoveryKey. The DER Encoded certificate file used to set an institutional recovery key.
     * @return StreamInterface|null
    */
    public function getFileVaultInstitutionalRecoveryKeyCertificate(): ?StreamInterface {
        return $this->fileVaultInstitutionalRecoveryKeyCertificate;
    }

    /**
     * Gets the fileVaultInstitutionalRecoveryKeyCertificateFileName property value. File name of the institutional recovery key certificate to display in UI. (.der).
     * @return string|null
    */
    public function getFileVaultInstitutionalRecoveryKeyCertificateFileName(): ?string {
        return $this->fileVaultInstitutionalRecoveryKeyCertificateFileName;
    }

    /**
     * Gets the fileVaultNumberOfTimesUserCanIgnore property value. Optional. When using the Defer option, this is the maximum number of times the user can ignore prompts to enable FileVault before FileVault will be required for the user to sign in. If set to -1, it will always prompt to enable FileVault until FileVault is enabled, though it will allow the user to bypass enabling FileVault. Setting this to 0 will disable the feature.
     * @return int|null
    */
    public function getFileVaultNumberOfTimesUserCanIgnore(): ?int {
        return $this->fileVaultNumberOfTimesUserCanIgnore;
    }

    /**
     * Gets the fileVaultPersonalRecoveryKeyHelpMessage property value. Required if selected recovery key type(s) include PersonalRecoveryKey. A short message displayed to the user that explains how they can retrieve their personal recovery key.
     * @return string|null
    */
    public function getFileVaultPersonalRecoveryKeyHelpMessage(): ?string {
        return $this->fileVaultPersonalRecoveryKeyHelpMessage;
    }

    /**
     * Gets the fileVaultPersonalRecoveryKeyRotationInMonths property value. Optional. If selected recovery key type(s) include PersonalRecoveryKey, the frequency to rotate that key, in months.
     * @return int|null
    */
    public function getFileVaultPersonalRecoveryKeyRotationInMonths(): ?int {
        return $this->fileVaultPersonalRecoveryKeyRotationInMonths;
    }

    /**
     * Gets the fileVaultSelectedRecoveryKeyTypes property value. Recovery key types for macOS FileVault
     * @return MacOSFileVaultRecoveryKeyTypes|null
    */
    public function getFileVaultSelectedRecoveryKeyTypes(): ?MacOSFileVaultRecoveryKeyTypes {
        return $this->fileVaultSelectedRecoveryKeyTypes;
    }

    /**
     * Gets the firewallApplications property value. List of applications with firewall settings. Firewall settings for applications not on this list are determined by the user. This collection can contain a maximum of 500 elements.
     * @return array<MacOSFirewallApplication>|null
    */
    public function getFirewallApplications(): ?array {
        return $this->firewallApplications;
    }

    /**
     * Gets the firewallBlockAllIncoming property value. Corresponds to the 'Block all incoming connections' option.
     * @return bool|null
    */
    public function getFirewallBlockAllIncoming(): ?bool {
        return $this->firewallBlockAllIncoming;
    }

    /**
     * Gets the firewallEnabled property value. Whether the firewall should be enabled or not.
     * @return bool|null
    */
    public function getFirewallEnabled(): ?bool {
        return $this->firewallEnabled;
    }

    /**
     * Gets the firewallEnableStealthMode property value. Corresponds to 'Enable stealth mode.'
     * @return bool|null
    */
    public function getFirewallEnableStealthMode(): ?bool {
        return $this->firewallEnableStealthMode;
    }

    /**
     * Gets the gatekeeperAllowedAppSource property value. App source options for macOS Gatekeeper.
     * @return MacOSGatekeeperAppSources|null
    */
    public function getGatekeeperAllowedAppSource(): ?MacOSGatekeeperAppSources {
        return $this->gatekeeperAllowedAppSource;
    }

    /**
     * Gets the gatekeeperBlockOverride property value. If set to true, the user override for Gatekeeper will be disabled.
     * @return bool|null
    */
    public function getGatekeeperBlockOverride(): ?bool {
        return $this->gatekeeperBlockOverride;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('advancedThreatProtectionAutomaticSampleSubmission', $this->advancedThreatProtectionAutomaticSampleSubmission);
        $writer->writeEnumValue('advancedThreatProtectionCloudDelivered', $this->advancedThreatProtectionCloudDelivered);
        $writer->writeEnumValue('advancedThreatProtectionDiagnosticDataCollection', $this->advancedThreatProtectionDiagnosticDataCollection);
        $writer->writeCollectionOfPrimitiveValues('advancedThreatProtectionExcludedExtensions', $this->advancedThreatProtectionExcludedExtensions);
        $writer->writeCollectionOfPrimitiveValues('advancedThreatProtectionExcludedFiles', $this->advancedThreatProtectionExcludedFiles);
        $writer->writeCollectionOfPrimitiveValues('advancedThreatProtectionExcludedFolders', $this->advancedThreatProtectionExcludedFolders);
        $writer->writeCollectionOfPrimitiveValues('advancedThreatProtectionExcludedProcesses', $this->advancedThreatProtectionExcludedProcesses);
        $writer->writeEnumValue('advancedThreatProtectionRealTime', $this->advancedThreatProtectionRealTime);
        $writer->writeBooleanValue('fileVaultAllowDeferralUntilSignOut', $this->fileVaultAllowDeferralUntilSignOut);
        $writer->writeBooleanValue('fileVaultDisablePromptAtSignOut', $this->fileVaultDisablePromptAtSignOut);
        $writer->writeBooleanValue('fileVaultEnabled', $this->fileVaultEnabled);
        $writer->writeBooleanValue('fileVaultHidePersonalRecoveryKey', $this->fileVaultHidePersonalRecoveryKey);
        $writer->writeBinaryContent('fileVaultInstitutionalRecoveryKeyCertificate', $this->fileVaultInstitutionalRecoveryKeyCertificate);
        $writer->writeStringValue('fileVaultInstitutionalRecoveryKeyCertificateFileName', $this->fileVaultInstitutionalRecoveryKeyCertificateFileName);
        $writer->writeIntegerValue('fileVaultNumberOfTimesUserCanIgnore', $this->fileVaultNumberOfTimesUserCanIgnore);
        $writer->writeStringValue('fileVaultPersonalRecoveryKeyHelpMessage', $this->fileVaultPersonalRecoveryKeyHelpMessage);
        $writer->writeIntegerValue('fileVaultPersonalRecoveryKeyRotationInMonths', $this->fileVaultPersonalRecoveryKeyRotationInMonths);
        $writer->writeEnumValue('fileVaultSelectedRecoveryKeyTypes', $this->fileVaultSelectedRecoveryKeyTypes);
        $writer->writeCollectionOfObjectValues('firewallApplications', $this->firewallApplications);
        $writer->writeBooleanValue('firewallBlockAllIncoming', $this->firewallBlockAllIncoming);
        $writer->writeBooleanValue('firewallEnabled', $this->firewallEnabled);
        $writer->writeBooleanValue('firewallEnableStealthMode', $this->firewallEnableStealthMode);
        $writer->writeEnumValue('gatekeeperAllowedAppSource', $this->gatekeeperAllowedAppSource);
        $writer->writeBooleanValue('gatekeeperBlockOverride', $this->gatekeeperBlockOverride);
    }

    /**
     * Sets the advancedThreatProtectionAutomaticSampleSubmission property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the advancedThreatProtectionAutomaticSampleSubmission property.
    */
    public function setAdvancedThreatProtectionAutomaticSampleSubmission(?Enablement $value ): void {
        $this->advancedThreatProtectionAutomaticSampleSubmission = $value;
    }

    /**
     * Sets the advancedThreatProtectionCloudDelivered property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the advancedThreatProtectionCloudDelivered property.
    */
    public function setAdvancedThreatProtectionCloudDelivered(?Enablement $value ): void {
        $this->advancedThreatProtectionCloudDelivered = $value;
    }

    /**
     * Sets the advancedThreatProtectionDiagnosticDataCollection property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the advancedThreatProtectionDiagnosticDataCollection property.
    */
    public function setAdvancedThreatProtectionDiagnosticDataCollection(?Enablement $value ): void {
        $this->advancedThreatProtectionDiagnosticDataCollection = $value;
    }

    /**
     * Sets the advancedThreatProtectionExcludedExtensions property value. A list of file extensions to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     *  @param array<string>|null $value Value to set for the advancedThreatProtectionExcludedExtensions property.
    */
    public function setAdvancedThreatProtectionExcludedExtensions(?array $value ): void {
        $this->advancedThreatProtectionExcludedExtensions = $value;
    }

    /**
     * Sets the advancedThreatProtectionExcludedFiles property value. A list of paths to files to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     *  @param array<string>|null $value Value to set for the advancedThreatProtectionExcludedFiles property.
    */
    public function setAdvancedThreatProtectionExcludedFiles(?array $value ): void {
        $this->advancedThreatProtectionExcludedFiles = $value;
    }

    /**
     * Sets the advancedThreatProtectionExcludedFolders property value. A list of paths to folders to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     *  @param array<string>|null $value Value to set for the advancedThreatProtectionExcludedFolders property.
    */
    public function setAdvancedThreatProtectionExcludedFolders(?array $value ): void {
        $this->advancedThreatProtectionExcludedFolders = $value;
    }

    /**
     * Sets the advancedThreatProtectionExcludedProcesses property value. A list of process names to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
     *  @param array<string>|null $value Value to set for the advancedThreatProtectionExcludedProcesses property.
    */
    public function setAdvancedThreatProtectionExcludedProcesses(?array $value ): void {
        $this->advancedThreatProtectionExcludedProcesses = $value;
    }

    /**
     * Sets the advancedThreatProtectionRealTime property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the advancedThreatProtectionRealTime property.
    */
    public function setAdvancedThreatProtectionRealTime(?Enablement $value ): void {
        $this->advancedThreatProtectionRealTime = $value;
    }

    /**
     * Sets the fileVaultAllowDeferralUntilSignOut property value. Optional. If set to true, the user can defer the enabling of FileVault until they sign out.
     *  @param bool|null $value Value to set for the fileVaultAllowDeferralUntilSignOut property.
    */
    public function setFileVaultAllowDeferralUntilSignOut(?bool $value ): void {
        $this->fileVaultAllowDeferralUntilSignOut = $value;
    }

    /**
     * Sets the fileVaultDisablePromptAtSignOut property value. Optional. When using the Defer option, if set to true, the user is not prompted to enable FileVault at sign-out.
     *  @param bool|null $value Value to set for the fileVaultDisablePromptAtSignOut property.
    */
    public function setFileVaultDisablePromptAtSignOut(?bool $value ): void {
        $this->fileVaultDisablePromptAtSignOut = $value;
    }

    /**
     * Sets the fileVaultEnabled property value. Whether FileVault should be enabled or not.
     *  @param bool|null $value Value to set for the fileVaultEnabled property.
    */
    public function setFileVaultEnabled(?bool $value ): void {
        $this->fileVaultEnabled = $value;
    }

    /**
     * Sets the fileVaultHidePersonalRecoveryKey property value. Optional. A hidden personal recovery key does not appear on the user's screen during FileVault encryption, reducing the risk of it ending up in the wrong hands.
     *  @param bool|null $value Value to set for the fileVaultHidePersonalRecoveryKey property.
    */
    public function setFileVaultHidePersonalRecoveryKey(?bool $value ): void {
        $this->fileVaultHidePersonalRecoveryKey = $value;
    }

    /**
     * Sets the fileVaultInstitutionalRecoveryKeyCertificate property value. Required if selected recovery key type(s) include InstitutionalRecoveryKey. The DER Encoded certificate file used to set an institutional recovery key.
     *  @param StreamInterface|null $value Value to set for the fileVaultInstitutionalRecoveryKeyCertificate property.
    */
    public function setFileVaultInstitutionalRecoveryKeyCertificate(?StreamInterface $value ): void {
        $this->fileVaultInstitutionalRecoveryKeyCertificate = $value;
    }

    /**
     * Sets the fileVaultInstitutionalRecoveryKeyCertificateFileName property value. File name of the institutional recovery key certificate to display in UI. (.der).
     *  @param string|null $value Value to set for the fileVaultInstitutionalRecoveryKeyCertificateFileName property.
    */
    public function setFileVaultInstitutionalRecoveryKeyCertificateFileName(?string $value ): void {
        $this->fileVaultInstitutionalRecoveryKeyCertificateFileName = $value;
    }

    /**
     * Sets the fileVaultNumberOfTimesUserCanIgnore property value. Optional. When using the Defer option, this is the maximum number of times the user can ignore prompts to enable FileVault before FileVault will be required for the user to sign in. If set to -1, it will always prompt to enable FileVault until FileVault is enabled, though it will allow the user to bypass enabling FileVault. Setting this to 0 will disable the feature.
     *  @param int|null $value Value to set for the fileVaultNumberOfTimesUserCanIgnore property.
    */
    public function setFileVaultNumberOfTimesUserCanIgnore(?int $value ): void {
        $this->fileVaultNumberOfTimesUserCanIgnore = $value;
    }

    /**
     * Sets the fileVaultPersonalRecoveryKeyHelpMessage property value. Required if selected recovery key type(s) include PersonalRecoveryKey. A short message displayed to the user that explains how they can retrieve their personal recovery key.
     *  @param string|null $value Value to set for the fileVaultPersonalRecoveryKeyHelpMessage property.
    */
    public function setFileVaultPersonalRecoveryKeyHelpMessage(?string $value ): void {
        $this->fileVaultPersonalRecoveryKeyHelpMessage = $value;
    }

    /**
     * Sets the fileVaultPersonalRecoveryKeyRotationInMonths property value. Optional. If selected recovery key type(s) include PersonalRecoveryKey, the frequency to rotate that key, in months.
     *  @param int|null $value Value to set for the fileVaultPersonalRecoveryKeyRotationInMonths property.
    */
    public function setFileVaultPersonalRecoveryKeyRotationInMonths(?int $value ): void {
        $this->fileVaultPersonalRecoveryKeyRotationInMonths = $value;
    }

    /**
     * Sets the fileVaultSelectedRecoveryKeyTypes property value. Recovery key types for macOS FileVault
     *  @param MacOSFileVaultRecoveryKeyTypes|null $value Value to set for the fileVaultSelectedRecoveryKeyTypes property.
    */
    public function setFileVaultSelectedRecoveryKeyTypes(?MacOSFileVaultRecoveryKeyTypes $value ): void {
        $this->fileVaultSelectedRecoveryKeyTypes = $value;
    }

    /**
     * Sets the firewallApplications property value. List of applications with firewall settings. Firewall settings for applications not on this list are determined by the user. This collection can contain a maximum of 500 elements.
     *  @param array<MacOSFirewallApplication>|null $value Value to set for the firewallApplications property.
    */
    public function setFirewallApplications(?array $value ): void {
        $this->firewallApplications = $value;
    }

    /**
     * Sets the firewallBlockAllIncoming property value. Corresponds to the 'Block all incoming connections' option.
     *  @param bool|null $value Value to set for the firewallBlockAllIncoming property.
    */
    public function setFirewallBlockAllIncoming(?bool $value ): void {
        $this->firewallBlockAllIncoming = $value;
    }

    /**
     * Sets the firewallEnabled property value. Whether the firewall should be enabled or not.
     *  @param bool|null $value Value to set for the firewallEnabled property.
    */
    public function setFirewallEnabled(?bool $value ): void {
        $this->firewallEnabled = $value;
    }

    /**
     * Sets the firewallEnableStealthMode property value. Corresponds to 'Enable stealth mode.'
     *  @param bool|null $value Value to set for the firewallEnableStealthMode property.
    */
    public function setFirewallEnableStealthMode(?bool $value ): void {
        $this->firewallEnableStealthMode = $value;
    }

    /**
     * Sets the gatekeeperAllowedAppSource property value. App source options for macOS Gatekeeper.
     *  @param MacOSGatekeeperAppSources|null $value Value to set for the gatekeeperAllowedAppSource property.
    */
    public function setGatekeeperAllowedAppSource(?MacOSGatekeeperAppSources $value ): void {
        $this->gatekeeperAllowedAppSource = $value;
    }

    /**
     * Sets the gatekeeperBlockOverride property value. If set to true, the user override for Gatekeeper will be disabled.
     *  @param bool|null $value Value to set for the gatekeeperBlockOverride property.
    */
    public function setGatekeeperBlockOverride(?bool $value ): void {
        $this->gatekeeperBlockOverride = $value;
    }

}
