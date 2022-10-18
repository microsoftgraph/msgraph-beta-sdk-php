<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10EnrollmentCompletionPageConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * @var bool|null $allowDeviceResetOnInstallFailure Allow or block device reset on installation failure
    */
    private ?bool $allowDeviceResetOnInstallFailure = null;
    
    /**
     * @var bool|null $allowDeviceUseOnInstallFailure Allow the user to continue using the device on installation failure
    */
    private ?bool $allowDeviceUseOnInstallFailure = null;
    
    /**
     * @var bool|null $allowLogCollectionOnInstallFailure Allow or block log collection on installation failure
    */
    private ?bool $allowLogCollectionOnInstallFailure = null;
    
    /**
     * @var bool|null $allowNonBlockingAppInstallation Install all required apps as non blocking apps during white glove
    */
    private ?bool $allowNonBlockingAppInstallation = null;
    
    /**
     * @var bool|null $blockDeviceSetupRetryByUser Allow the user to retry the setup on installation failure
    */
    private ?bool $blockDeviceSetupRetryByUser = null;
    
    /**
     * @var string|null $customErrorMessage Set custom error message to show upon installation failure
    */
    private ?string $customErrorMessage = null;
    
    /**
     * @var bool|null $disableUserStatusTrackingAfterFirstUser Only show installation progress for first user post enrollment
    */
    private ?bool $disableUserStatusTrackingAfterFirstUser = null;
    
    /**
     * @var int|null $installProgressTimeoutInMinutes Set installation progress timeout in minutes
    */
    private ?int $installProgressTimeoutInMinutes = null;
    
    /**
     * @var array<string>|null $selectedMobileAppIds Selected applications to track the installation status
    */
    private ?array $selectedMobileAppIds = null;
    
    /**
     * @var bool|null $showInstallationProgress Show or hide installation progress to user
    */
    private ?bool $showInstallationProgress = null;
    
    /**
     * @var bool|null $trackInstallProgressForAutopilotOnly Only show installation progress for Autopilot enrollment scenarios
    */
    private ?bool $trackInstallProgressForAutopilotOnly = null;
    
    /**
     * Instantiates a new Windows10EnrollmentCompletionPageConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10EnrollmentCompletionPageConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10EnrollmentCompletionPageConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10EnrollmentCompletionPageConfiguration {
        return new Windows10EnrollmentCompletionPageConfiguration();
    }

    /**
     * Gets the allowDeviceResetOnInstallFailure property value. Allow or block device reset on installation failure
     * @return bool|null
    */
    public function getAllowDeviceResetOnInstallFailure(): ?bool {
        return $this->allowDeviceResetOnInstallFailure;
    }

    /**
     * Gets the allowDeviceUseOnInstallFailure property value. Allow the user to continue using the device on installation failure
     * @return bool|null
    */
    public function getAllowDeviceUseOnInstallFailure(): ?bool {
        return $this->allowDeviceUseOnInstallFailure;
    }

    /**
     * Gets the allowLogCollectionOnInstallFailure property value. Allow or block log collection on installation failure
     * @return bool|null
    */
    public function getAllowLogCollectionOnInstallFailure(): ?bool {
        return $this->allowLogCollectionOnInstallFailure;
    }

    /**
     * Gets the allowNonBlockingAppInstallation property value. Install all required apps as non blocking apps during white glove
     * @return bool|null
    */
    public function getAllowNonBlockingAppInstallation(): ?bool {
        return $this->allowNonBlockingAppInstallation;
    }

    /**
     * Gets the blockDeviceSetupRetryByUser property value. Allow the user to retry the setup on installation failure
     * @return bool|null
    */
    public function getBlockDeviceSetupRetryByUser(): ?bool {
        return $this->blockDeviceSetupRetryByUser;
    }

    /**
     * Gets the customErrorMessage property value. Set custom error message to show upon installation failure
     * @return string|null
    */
    public function getCustomErrorMessage(): ?string {
        return $this->customErrorMessage;
    }

    /**
     * Gets the disableUserStatusTrackingAfterFirstUser property value. Only show installation progress for first user post enrollment
     * @return bool|null
    */
    public function getDisableUserStatusTrackingAfterFirstUser(): ?bool {
        return $this->disableUserStatusTrackingAfterFirstUser;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowDeviceResetOnInstallFailure' => fn(ParseNode $n) => $o->setAllowDeviceResetOnInstallFailure($n->getBooleanValue()),
            'allowDeviceUseOnInstallFailure' => fn(ParseNode $n) => $o->setAllowDeviceUseOnInstallFailure($n->getBooleanValue()),
            'allowLogCollectionOnInstallFailure' => fn(ParseNode $n) => $o->setAllowLogCollectionOnInstallFailure($n->getBooleanValue()),
            'allowNonBlockingAppInstallation' => fn(ParseNode $n) => $o->setAllowNonBlockingAppInstallation($n->getBooleanValue()),
            'blockDeviceSetupRetryByUser' => fn(ParseNode $n) => $o->setBlockDeviceSetupRetryByUser($n->getBooleanValue()),
            'customErrorMessage' => fn(ParseNode $n) => $o->setCustomErrorMessage($n->getStringValue()),
            'disableUserStatusTrackingAfterFirstUser' => fn(ParseNode $n) => $o->setDisableUserStatusTrackingAfterFirstUser($n->getBooleanValue()),
            'installProgressTimeoutInMinutes' => fn(ParseNode $n) => $o->setInstallProgressTimeoutInMinutes($n->getIntegerValue()),
            'selectedMobileAppIds' => fn(ParseNode $n) => $o->setSelectedMobileAppIds($n->getCollectionOfPrimitiveValues()),
            'showInstallationProgress' => fn(ParseNode $n) => $o->setShowInstallationProgress($n->getBooleanValue()),
            'trackInstallProgressForAutopilotOnly' => fn(ParseNode $n) => $o->setTrackInstallProgressForAutopilotOnly($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the installProgressTimeoutInMinutes property value. Set installation progress timeout in minutes
     * @return int|null
    */
    public function getInstallProgressTimeoutInMinutes(): ?int {
        return $this->installProgressTimeoutInMinutes;
    }

    /**
     * Gets the selectedMobileAppIds property value. Selected applications to track the installation status
     * @return array<string>|null
    */
    public function getSelectedMobileAppIds(): ?array {
        return $this->selectedMobileAppIds;
    }

    /**
     * Gets the showInstallationProgress property value. Show or hide installation progress to user
     * @return bool|null
    */
    public function getShowInstallationProgress(): ?bool {
        return $this->showInstallationProgress;
    }

    /**
     * Gets the trackInstallProgressForAutopilotOnly property value. Only show installation progress for Autopilot enrollment scenarios
     * @return bool|null
    */
    public function getTrackInstallProgressForAutopilotOnly(): ?bool {
        return $this->trackInstallProgressForAutopilotOnly;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowDeviceResetOnInstallFailure', $this->allowDeviceResetOnInstallFailure);
        $writer->writeBooleanValue('allowDeviceUseOnInstallFailure', $this->allowDeviceUseOnInstallFailure);
        $writer->writeBooleanValue('allowLogCollectionOnInstallFailure', $this->allowLogCollectionOnInstallFailure);
        $writer->writeBooleanValue('allowNonBlockingAppInstallation', $this->allowNonBlockingAppInstallation);
        $writer->writeBooleanValue('blockDeviceSetupRetryByUser', $this->blockDeviceSetupRetryByUser);
        $writer->writeStringValue('customErrorMessage', $this->customErrorMessage);
        $writer->writeBooleanValue('disableUserStatusTrackingAfterFirstUser', $this->disableUserStatusTrackingAfterFirstUser);
        $writer->writeIntegerValue('installProgressTimeoutInMinutes', $this->installProgressTimeoutInMinutes);
        $writer->writeCollectionOfPrimitiveValues('selectedMobileAppIds', $this->selectedMobileAppIds);
        $writer->writeBooleanValue('showInstallationProgress', $this->showInstallationProgress);
        $writer->writeBooleanValue('trackInstallProgressForAutopilotOnly', $this->trackInstallProgressForAutopilotOnly);
    }

    /**
     * Sets the allowDeviceResetOnInstallFailure property value. Allow or block device reset on installation failure
     *  @param bool|null $value Value to set for the allowDeviceResetOnInstallFailure property.
    */
    public function setAllowDeviceResetOnInstallFailure(?bool $value ): void {
        $this->allowDeviceResetOnInstallFailure = $value;
    }

    /**
     * Sets the allowDeviceUseOnInstallFailure property value. Allow the user to continue using the device on installation failure
     *  @param bool|null $value Value to set for the allowDeviceUseOnInstallFailure property.
    */
    public function setAllowDeviceUseOnInstallFailure(?bool $value ): void {
        $this->allowDeviceUseOnInstallFailure = $value;
    }

    /**
     * Sets the allowLogCollectionOnInstallFailure property value. Allow or block log collection on installation failure
     *  @param bool|null $value Value to set for the allowLogCollectionOnInstallFailure property.
    */
    public function setAllowLogCollectionOnInstallFailure(?bool $value ): void {
        $this->allowLogCollectionOnInstallFailure = $value;
    }

    /**
     * Sets the allowNonBlockingAppInstallation property value. Install all required apps as non blocking apps during white glove
     *  @param bool|null $value Value to set for the allowNonBlockingAppInstallation property.
    */
    public function setAllowNonBlockingAppInstallation(?bool $value ): void {
        $this->allowNonBlockingAppInstallation = $value;
    }

    /**
     * Sets the blockDeviceSetupRetryByUser property value. Allow the user to retry the setup on installation failure
     *  @param bool|null $value Value to set for the blockDeviceSetupRetryByUser property.
    */
    public function setBlockDeviceSetupRetryByUser(?bool $value ): void {
        $this->blockDeviceSetupRetryByUser = $value;
    }

    /**
     * Sets the customErrorMessage property value. Set custom error message to show upon installation failure
     *  @param string|null $value Value to set for the customErrorMessage property.
    */
    public function setCustomErrorMessage(?string $value ): void {
        $this->customErrorMessage = $value;
    }

    /**
     * Sets the disableUserStatusTrackingAfterFirstUser property value. Only show installation progress for first user post enrollment
     *  @param bool|null $value Value to set for the disableUserStatusTrackingAfterFirstUser property.
    */
    public function setDisableUserStatusTrackingAfterFirstUser(?bool $value ): void {
        $this->disableUserStatusTrackingAfterFirstUser = $value;
    }

    /**
     * Sets the installProgressTimeoutInMinutes property value. Set installation progress timeout in minutes
     *  @param int|null $value Value to set for the installProgressTimeoutInMinutes property.
    */
    public function setInstallProgressTimeoutInMinutes(?int $value ): void {
        $this->installProgressTimeoutInMinutes = $value;
    }

    /**
     * Sets the selectedMobileAppIds property value. Selected applications to track the installation status
     *  @param array<string>|null $value Value to set for the selectedMobileAppIds property.
    */
    public function setSelectedMobileAppIds(?array $value ): void {
        $this->selectedMobileAppIds = $value;
    }

    /**
     * Sets the showInstallationProgress property value. Show or hide installation progress to user
     *  @param bool|null $value Value to set for the showInstallationProgress property.
    */
    public function setShowInstallationProgress(?bool $value ): void {
        $this->showInstallationProgress = $value;
    }

    /**
     * Sets the trackInstallProgressForAutopilotOnly property value. Only show installation progress for Autopilot enrollment scenarios
     *  @param bool|null $value Value to set for the trackInstallProgressForAutopilotOnly property.
    */
    public function setTrackInstallProgressForAutopilotOnly(?bool $value ): void {
        $this->trackInstallProgressForAutopilotOnly = $value;
    }

}
