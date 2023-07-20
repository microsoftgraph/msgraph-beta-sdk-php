<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Enrollment status screen setting
*/
class WindowsEnrollmentStatusScreenSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windowsEnrollmentStatusScreenSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the allowDeviceUseBeforeProfileAndAppInstallComplete property value. Allow or block user to use device before profile and app installation complete
     * @return bool|null
    */
    public function getAllowDeviceUseBeforeProfileAndAppInstallComplete(): ?bool {
        $val = $this->getBackingStore()->get('allowDeviceUseBeforeProfileAndAppInstallComplete');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowDeviceUseBeforeProfileAndAppInstallComplete'");
    }

    /**
     * Gets the allowDeviceUseOnInstallFailure property value. Allow the user to continue using the device on installation failure
     * @return bool|null
    */
    public function getAllowDeviceUseOnInstallFailure(): ?bool {
        $val = $this->getBackingStore()->get('allowDeviceUseOnInstallFailure');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowDeviceUseOnInstallFailure'");
    }

    /**
     * Gets the allowLogCollectionOnInstallFailure property value. Allow or block log collection on installation failure
     * @return bool|null
    */
    public function getAllowLogCollectionOnInstallFailure(): ?bool {
        $val = $this->getBackingStore()->get('allowLogCollectionOnInstallFailure');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowLogCollectionOnInstallFailure'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the blockDeviceSetupRetryByUser property value. Allow the user to retry the setup on installation failure
     * @return bool|null
    */
    public function getBlockDeviceSetupRetryByUser(): ?bool {
        $val = $this->getBackingStore()->get('blockDeviceSetupRetryByUser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockDeviceSetupRetryByUser'");
    }

    /**
     * Gets the customErrorMessage property value. Set custom error message to show upon installation failure
     * @return string|null
    */
    public function getCustomErrorMessage(): ?string {
        $val = $this->getBackingStore()->get('customErrorMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customErrorMessage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowDeviceUseBeforeProfileAndAppInstallComplete' => fn(ParseNode $n) => $o->setAllowDeviceUseBeforeProfileAndAppInstallComplete($n->getBooleanValue()),
            'allowDeviceUseOnInstallFailure' => fn(ParseNode $n) => $o->setAllowDeviceUseOnInstallFailure($n->getBooleanValue()),
            'allowLogCollectionOnInstallFailure' => fn(ParseNode $n) => $o->setAllowLogCollectionOnInstallFailure($n->getBooleanValue()),
            'blockDeviceSetupRetryByUser' => fn(ParseNode $n) => $o->setBlockDeviceSetupRetryByUser($n->getBooleanValue()),
            'customErrorMessage' => fn(ParseNode $n) => $o->setCustomErrorMessage($n->getStringValue()),
            'hideInstallationProgress' => fn(ParseNode $n) => $o->setHideInstallationProgress($n->getBooleanValue()),
            'installProgressTimeoutInMinutes' => fn(ParseNode $n) => $o->setInstallProgressTimeoutInMinutes($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hideInstallationProgress property value. Show or hide installation progress to user
     * @return bool|null
    */
    public function getHideInstallationProgress(): ?bool {
        $val = $this->getBackingStore()->get('hideInstallationProgress');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideInstallationProgress'");
    }

    /**
     * Gets the installProgressTimeoutInMinutes property value. Set installation progress timeout in minutes
     * @return int|null
    */
    public function getInstallProgressTimeoutInMinutes(): ?int {
        $val = $this->getBackingStore()->get('installProgressTimeoutInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installProgressTimeoutInMinutes'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowDeviceUseBeforeProfileAndAppInstallComplete', $this->getAllowDeviceUseBeforeProfileAndAppInstallComplete());
        $writer->writeBooleanValue('allowDeviceUseOnInstallFailure', $this->getAllowDeviceUseOnInstallFailure());
        $writer->writeBooleanValue('allowLogCollectionOnInstallFailure', $this->getAllowLogCollectionOnInstallFailure());
        $writer->writeBooleanValue('blockDeviceSetupRetryByUser', $this->getBlockDeviceSetupRetryByUser());
        $writer->writeStringValue('customErrorMessage', $this->getCustomErrorMessage());
        $writer->writeBooleanValue('hideInstallationProgress', $this->getHideInstallationProgress());
        $writer->writeIntegerValue('installProgressTimeoutInMinutes', $this->getInstallProgressTimeoutInMinutes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowDeviceUseBeforeProfileAndAppInstallComplete property value. Allow or block user to use device before profile and app installation complete
     * @param bool|null $value Value to set for the allowDeviceUseBeforeProfileAndAppInstallComplete property.
    */
    public function setAllowDeviceUseBeforeProfileAndAppInstallComplete(?bool $value): void {
        $this->getBackingStore()->set('allowDeviceUseBeforeProfileAndAppInstallComplete', $value);
    }

    /**
     * Sets the allowDeviceUseOnInstallFailure property value. Allow the user to continue using the device on installation failure
     * @param bool|null $value Value to set for the allowDeviceUseOnInstallFailure property.
    */
    public function setAllowDeviceUseOnInstallFailure(?bool $value): void {
        $this->getBackingStore()->set('allowDeviceUseOnInstallFailure', $value);
    }

    /**
     * Sets the allowLogCollectionOnInstallFailure property value. Allow or block log collection on installation failure
     * @param bool|null $value Value to set for the allowLogCollectionOnInstallFailure property.
    */
    public function setAllowLogCollectionOnInstallFailure(?bool $value): void {
        $this->getBackingStore()->set('allowLogCollectionOnInstallFailure', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the blockDeviceSetupRetryByUser property value. Allow the user to retry the setup on installation failure
     * @param bool|null $value Value to set for the blockDeviceSetupRetryByUser property.
    */
    public function setBlockDeviceSetupRetryByUser(?bool $value): void {
        $this->getBackingStore()->set('blockDeviceSetupRetryByUser', $value);
    }

    /**
     * Sets the customErrorMessage property value. Set custom error message to show upon installation failure
     * @param string|null $value Value to set for the customErrorMessage property.
    */
    public function setCustomErrorMessage(?string $value): void {
        $this->getBackingStore()->set('customErrorMessage', $value);
    }

    /**
     * Sets the hideInstallationProgress property value. Show or hide installation progress to user
     * @param bool|null $value Value to set for the hideInstallationProgress property.
    */
    public function setHideInstallationProgress(?bool $value): void {
        $this->getBackingStore()->set('hideInstallationProgress', $value);
    }

    /**
     * Sets the installProgressTimeoutInMinutes property value. Set installation progress timeout in minutes
     * @param int|null $value Value to set for the installProgressTimeoutInMinutes property.
    */
    public function setInstallProgressTimeoutInMinutes(?int $value): void {
        $this->getBackingStore()->set('installProgressTimeoutInMinutes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
