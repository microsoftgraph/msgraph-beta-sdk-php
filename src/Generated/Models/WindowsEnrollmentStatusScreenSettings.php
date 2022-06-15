<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsEnrollmentStatusScreenSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowDeviceUseBeforeProfileAndAppInstallComplete Allow or block user to use device before profile and app installation complete
    */
    private ?bool $allowDeviceUseBeforeProfileAndAppInstallComplete = null;
    
    /**
     * @var bool|null $allowDeviceUseOnInstallFailure Allow the user to continue using the device on installation failure
    */
    private ?bool $allowDeviceUseOnInstallFailure = null;
    
    /**
     * @var bool|null $allowLogCollectionOnInstallFailure Allow or block log collection on installation failure
    */
    private ?bool $allowLogCollectionOnInstallFailure = null;
    
    /**
     * @var bool|null $blockDeviceSetupRetryByUser Allow the user to retry the setup on installation failure
    */
    private ?bool $blockDeviceSetupRetryByUser = null;
    
    /**
     * @var string|null $customErrorMessage Set custom error message to show upon installation failure
    */
    private ?string $customErrorMessage = null;
    
    /**
     * @var bool|null $hideInstallationProgress Show or hide installation progress to user
    */
    private ?bool $hideInstallationProgress = null;
    
    /**
     * @var int|null $installProgressTimeoutInMinutes Set installation progress timeout in minutes
    */
    private ?int $installProgressTimeoutInMinutes = null;
    
    /**
     * Instantiates a new windowsEnrollmentStatusScreenSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsEnrollmentStatusScreenSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsEnrollmentStatusScreenSettings {
        return new WindowsEnrollmentStatusScreenSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowDeviceUseBeforeProfileAndAppInstallComplete property value. Allow or block user to use device before profile and app installation complete
     * @return bool|null
    */
    public function getAllowDeviceUseBeforeProfileAndAppInstallComplete(): ?bool {
        return $this->allowDeviceUseBeforeProfileAndAppInstallComplete;
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowDeviceUseBeforeProfileAndAppInstallComplete' => function (ParseNode $n) use ($o) { $o->setAllowDeviceUseBeforeProfileAndAppInstallComplete($n->getBooleanValue()); },
            'allowDeviceUseOnInstallFailure' => function (ParseNode $n) use ($o) { $o->setAllowDeviceUseOnInstallFailure($n->getBooleanValue()); },
            'allowLogCollectionOnInstallFailure' => function (ParseNode $n) use ($o) { $o->setAllowLogCollectionOnInstallFailure($n->getBooleanValue()); },
            'blockDeviceSetupRetryByUser' => function (ParseNode $n) use ($o) { $o->setBlockDeviceSetupRetryByUser($n->getBooleanValue()); },
            'customErrorMessage' => function (ParseNode $n) use ($o) { $o->setCustomErrorMessage($n->getStringValue()); },
            'hideInstallationProgress' => function (ParseNode $n) use ($o) { $o->setHideInstallationProgress($n->getBooleanValue()); },
            'installProgressTimeoutInMinutes' => function (ParseNode $n) use ($o) { $o->setInstallProgressTimeoutInMinutes($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the hideInstallationProgress property value. Show or hide installation progress to user
     * @return bool|null
    */
    public function getHideInstallationProgress(): ?bool {
        return $this->hideInstallationProgress;
    }

    /**
     * Gets the installProgressTimeoutInMinutes property value. Set installation progress timeout in minutes
     * @return int|null
    */
    public function getInstallProgressTimeoutInMinutes(): ?int {
        return $this->installProgressTimeoutInMinutes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowDeviceUseBeforeProfileAndAppInstallComplete', $this->allowDeviceUseBeforeProfileAndAppInstallComplete);
        $writer->writeBooleanValue('allowDeviceUseOnInstallFailure', $this->allowDeviceUseOnInstallFailure);
        $writer->writeBooleanValue('allowLogCollectionOnInstallFailure', $this->allowLogCollectionOnInstallFailure);
        $writer->writeBooleanValue('blockDeviceSetupRetryByUser', $this->blockDeviceSetupRetryByUser);
        $writer->writeStringValue('customErrorMessage', $this->customErrorMessage);
        $writer->writeBooleanValue('hideInstallationProgress', $this->hideInstallationProgress);
        $writer->writeIntegerValue('installProgressTimeoutInMinutes', $this->installProgressTimeoutInMinutes);
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
     * Sets the allowDeviceUseBeforeProfileAndAppInstallComplete property value. Allow or block user to use device before profile and app installation complete
     *  @param bool|null $value Value to set for the allowDeviceUseBeforeProfileAndAppInstallComplete property.
    */
    public function setAllowDeviceUseBeforeProfileAndAppInstallComplete(?bool $value ): void {
        $this->allowDeviceUseBeforeProfileAndAppInstallComplete = $value;
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
     * Sets the hideInstallationProgress property value. Show or hide installation progress to user
     *  @param bool|null $value Value to set for the hideInstallationProgress property.
    */
    public function setHideInstallationProgress(?bool $value ): void {
        $this->hideInstallationProgress = $value;
    }

    /**
     * Sets the installProgressTimeoutInMinutes property value. Set installation progress timeout in minutes
     *  @param int|null $value Value to set for the installProgressTimeoutInMinutes property.
    */
    public function setInstallProgressTimeoutInMinutes(?int $value ): void {
        $this->installProgressTimeoutInMinutes = $value;
    }

}
