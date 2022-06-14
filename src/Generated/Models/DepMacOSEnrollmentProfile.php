<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepMacOSEnrollmentProfile extends DepEnrollmentBaseProfile implements Parsable 
{
    /**
     * @var bool|null $accessibilityScreenDisabled Indicates if Accessibility screen is disabled
    */
    private ?bool $accessibilityScreenDisabled = null;
    
    /**
     * @var bool|null $autoUnlockWithWatchDisabled Indicates if UnlockWithWatch screen is disabled
    */
    private ?bool $autoUnlockWithWatchDisabled = null;
    
    /**
     * @var bool|null $chooseYourLockScreenDisabled Indicates if iCloud Documents and Desktop screen is disabled
    */
    private ?bool $chooseYourLockScreenDisabled = null;
    
    /**
     * @var bool|null $fileVaultDisabled Indicates if file vault is disabled
    */
    private ?bool $fileVaultDisabled = null;
    
    /**
     * @var bool|null $iCloudDiagnosticsDisabled Indicates if iCloud Analytics screen is disabled
    */
    private ?bool $iCloudDiagnosticsDisabled = null;
    
    /**
     * @var bool|null $iCloudStorageDisabled Indicates if iCloud Documents and Desktop screen is disabled
    */
    private ?bool $iCloudStorageDisabled = null;
    
    /**
     * @var bool|null $passCodeDisabled Indicates if Passcode setup pane is disabled
    */
    private ?bool $passCodeDisabled = null;
    
    /**
     * @var bool|null $registrationDisabled Indicates if registration is disabled
    */
    private ?bool $registrationDisabled = null;
    
    /**
     * @var bool|null $zoomDisabled Indicates if zoom setup pane is disabled
    */
    private ?bool $zoomDisabled = null;
    
    /**
     * Instantiates a new DepMacOSEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepMacOSEnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DepMacOSEnrollmentProfile {
        return new DepMacOSEnrollmentProfile();
    }

    /**
     * Gets the accessibilityScreenDisabled property value. Indicates if Accessibility screen is disabled
     * @return bool|null
    */
    public function getAccessibilityScreenDisabled(): ?bool {
        return $this->accessibilityScreenDisabled;
    }

    /**
     * Gets the autoUnlockWithWatchDisabled property value. Indicates if UnlockWithWatch screen is disabled
     * @return bool|null
    */
    public function getAutoUnlockWithWatchDisabled(): ?bool {
        return $this->autoUnlockWithWatchDisabled;
    }

    /**
     * Gets the chooseYourLockScreenDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @return bool|null
    */
    public function getChooseYourLockScreenDisabled(): ?bool {
        return $this->chooseYourLockScreenDisabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessibilityScreenDisabled' => function (ParseNode $n) use ($o) { $o->setAccessibilityScreenDisabled($n->getBooleanValue()); },
            'autoUnlockWithWatchDisabled' => function (ParseNode $n) use ($o) { $o->setAutoUnlockWithWatchDisabled($n->getBooleanValue()); },
            'chooseYourLockScreenDisabled' => function (ParseNode $n) use ($o) { $o->setChooseYourLockScreenDisabled($n->getBooleanValue()); },
            'fileVaultDisabled' => function (ParseNode $n) use ($o) { $o->setFileVaultDisabled($n->getBooleanValue()); },
            'iCloudDiagnosticsDisabled' => function (ParseNode $n) use ($o) { $o->setICloudDiagnosticsDisabled($n->getBooleanValue()); },
            'iCloudStorageDisabled' => function (ParseNode $n) use ($o) { $o->setICloudStorageDisabled($n->getBooleanValue()); },
            'passCodeDisabled' => function (ParseNode $n) use ($o) { $o->setPassCodeDisabled($n->getBooleanValue()); },
            'registrationDisabled' => function (ParseNode $n) use ($o) { $o->setRegistrationDisabled($n->getBooleanValue()); },
            'zoomDisabled' => function (ParseNode $n) use ($o) { $o->setZoomDisabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the fileVaultDisabled property value. Indicates if file vault is disabled
     * @return bool|null
    */
    public function getFileVaultDisabled(): ?bool {
        return $this->fileVaultDisabled;
    }

    /**
     * Gets the iCloudDiagnosticsDisabled property value. Indicates if iCloud Analytics screen is disabled
     * @return bool|null
    */
    public function getICloudDiagnosticsDisabled(): ?bool {
        return $this->iCloudDiagnosticsDisabled;
    }

    /**
     * Gets the iCloudStorageDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @return bool|null
    */
    public function getICloudStorageDisabled(): ?bool {
        return $this->iCloudStorageDisabled;
    }

    /**
     * Gets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @return bool|null
    */
    public function getPassCodeDisabled(): ?bool {
        return $this->passCodeDisabled;
    }

    /**
     * Gets the registrationDisabled property value. Indicates if registration is disabled
     * @return bool|null
    */
    public function getRegistrationDisabled(): ?bool {
        return $this->registrationDisabled;
    }

    /**
     * Gets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     * @return bool|null
    */
    public function getZoomDisabled(): ?bool {
        return $this->zoomDisabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accessibilityScreenDisabled', $this->accessibilityScreenDisabled);
        $writer->writeBooleanValue('autoUnlockWithWatchDisabled', $this->autoUnlockWithWatchDisabled);
        $writer->writeBooleanValue('chooseYourLockScreenDisabled', $this->chooseYourLockScreenDisabled);
        $writer->writeBooleanValue('fileVaultDisabled', $this->fileVaultDisabled);
        $writer->writeBooleanValue('iCloudDiagnosticsDisabled', $this->iCloudDiagnosticsDisabled);
        $writer->writeBooleanValue('iCloudStorageDisabled', $this->iCloudStorageDisabled);
        $writer->writeBooleanValue('passCodeDisabled', $this->passCodeDisabled);
        $writer->writeBooleanValue('registrationDisabled', $this->registrationDisabled);
        $writer->writeBooleanValue('zoomDisabled', $this->zoomDisabled);
    }

    /**
     * Sets the accessibilityScreenDisabled property value. Indicates if Accessibility screen is disabled
     *  @param bool|null $value Value to set for the accessibilityScreenDisabled property.
    */
    public function setAccessibilityScreenDisabled(?bool $value ): void {
        $this->accessibilityScreenDisabled = $value;
    }

    /**
     * Sets the autoUnlockWithWatchDisabled property value. Indicates if UnlockWithWatch screen is disabled
     *  @param bool|null $value Value to set for the autoUnlockWithWatchDisabled property.
    */
    public function setAutoUnlockWithWatchDisabled(?bool $value ): void {
        $this->autoUnlockWithWatchDisabled = $value;
    }

    /**
     * Sets the chooseYourLockScreenDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     *  @param bool|null $value Value to set for the chooseYourLockScreenDisabled property.
    */
    public function setChooseYourLockScreenDisabled(?bool $value ): void {
        $this->chooseYourLockScreenDisabled = $value;
    }

    /**
     * Sets the fileVaultDisabled property value. Indicates if file vault is disabled
     *  @param bool|null $value Value to set for the fileVaultDisabled property.
    */
    public function setFileVaultDisabled(?bool $value ): void {
        $this->fileVaultDisabled = $value;
    }

    /**
     * Sets the iCloudDiagnosticsDisabled property value. Indicates if iCloud Analytics screen is disabled
     *  @param bool|null $value Value to set for the iCloudDiagnosticsDisabled property.
    */
    public function setICloudDiagnosticsDisabled(?bool $value ): void {
        $this->iCloudDiagnosticsDisabled = $value;
    }

    /**
     * Sets the iCloudStorageDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     *  @param bool|null $value Value to set for the iCloudStorageDisabled property.
    */
    public function setICloudStorageDisabled(?bool $value ): void {
        $this->iCloudStorageDisabled = $value;
    }

    /**
     * Sets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     *  @param bool|null $value Value to set for the passCodeDisabled property.
    */
    public function setPassCodeDisabled(?bool $value ): void {
        $this->passCodeDisabled = $value;
    }

    /**
     * Sets the registrationDisabled property value. Indicates if registration is disabled
     *  @param bool|null $value Value to set for the registrationDisabled property.
    */
    public function setRegistrationDisabled(?bool $value ): void {
        $this->registrationDisabled = $value;
    }

    /**
     * Sets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     *  @param bool|null $value Value to set for the zoomDisabled property.
    */
    public function setZoomDisabled(?bool $value ): void {
        $this->zoomDisabled = $value;
    }

}
