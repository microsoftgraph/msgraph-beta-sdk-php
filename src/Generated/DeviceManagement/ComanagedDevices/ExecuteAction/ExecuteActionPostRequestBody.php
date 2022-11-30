<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\ExecuteAction;

use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceRemoteAction;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ExecuteActionPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new executeActionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExecuteActionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExecuteActionPostRequestBody {
        return new ExecuteActionPostRequestBody();
    }

    /**
     * Gets the actionName property value. The actionName property
     * @return ManagedDeviceRemoteAction|null
    */
    public function getActionName(): ?ManagedDeviceRemoteAction {
        return $this->getBackingStore()->get('actionName');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the carrierUrl property value. The carrierUrl property
     * @return string|null
    */
    public function getCarrierUrl(): ?string {
        return $this->getBackingStore()->get('carrierUrl');
    }

    /**
     * Gets the deprovisionReason property value. The deprovisionReason property
     * @return string|null
    */
    public function getDeprovisionReason(): ?string {
        return $this->getBackingStore()->get('deprovisionReason');
    }

    /**
     * Gets the deviceIds property value. The deviceIds property
     * @return array<string>|null
    */
    public function getDeviceIds(): ?array {
        return $this->getBackingStore()->get('deviceIds');
    }

    /**
     * Gets the deviceName property value. The deviceName property
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => fn(ParseNode $n) => $o->setActionName($n->getEnumValue(ManagedDeviceRemoteAction::class)),
            'carrierUrl' => fn(ParseNode $n) => $o->setCarrierUrl($n->getStringValue()),
            'deprovisionReason' => fn(ParseNode $n) => $o->setDeprovisionReason($n->getStringValue()),
            'deviceIds' => fn(ParseNode $n) => $o->setDeviceIds($n->getCollectionOfPrimitiveValues()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'keepEnrollmentData' => fn(ParseNode $n) => $o->setKeepEnrollmentData($n->getBooleanValue()),
            'keepUserData' => fn(ParseNode $n) => $o->setKeepUserData($n->getBooleanValue()),
            'notificationBody' => fn(ParseNode $n) => $o->setNotificationBody($n->getStringValue()),
            'notificationTitle' => fn(ParseNode $n) => $o->setNotificationTitle($n->getStringValue()),
            'organizationalUnitPath' => fn(ParseNode $n) => $o->setOrganizationalUnitPath($n->getStringValue()),
            'persistEsimDataPlan' => fn(ParseNode $n) => $o->setPersistEsimDataPlan($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the keepEnrollmentData property value. The keepEnrollmentData property
     * @return bool|null
    */
    public function getKeepEnrollmentData(): ?bool {
        return $this->getBackingStore()->get('keepEnrollmentData');
    }

    /**
     * Gets the keepUserData property value. The keepUserData property
     * @return bool|null
    */
    public function getKeepUserData(): ?bool {
        return $this->getBackingStore()->get('keepUserData');
    }

    /**
     * Gets the notificationBody property value. The notificationBody property
     * @return string|null
    */
    public function getNotificationBody(): ?string {
        return $this->getBackingStore()->get('notificationBody');
    }

    /**
     * Gets the notificationTitle property value. The notificationTitle property
     * @return string|null
    */
    public function getNotificationTitle(): ?string {
        return $this->getBackingStore()->get('notificationTitle');
    }

    /**
     * Gets the organizationalUnitPath property value. The organizationalUnitPath property
     * @return string|null
    */
    public function getOrganizationalUnitPath(): ?string {
        return $this->getBackingStore()->get('organizationalUnitPath');
    }

    /**
     * Gets the persistEsimDataPlan property value. The persistEsimDataPlan property
     * @return bool|null
    */
    public function getPersistEsimDataPlan(): ?bool {
        return $this->getBackingStore()->get('persistEsimDataPlan');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actionName', $this->getActionName());
        $writer->writeStringValue('carrierUrl', $this->getCarrierUrl());
        $writer->writeStringValue('deprovisionReason', $this->getDeprovisionReason());
        $writer->writeCollectionOfPrimitiveValues('deviceIds', $this->getDeviceIds());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeBooleanValue('keepEnrollmentData', $this->getKeepEnrollmentData());
        $writer->writeBooleanValue('keepUserData', $this->getKeepUserData());
        $writer->writeStringValue('notificationBody', $this->getNotificationBody());
        $writer->writeStringValue('notificationTitle', $this->getNotificationTitle());
        $writer->writeStringValue('organizationalUnitPath', $this->getOrganizationalUnitPath());
        $writer->writeBooleanValue('persistEsimDataPlan', $this->getPersistEsimDataPlan());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionName property value. The actionName property
     *  @param ManagedDeviceRemoteAction|null $value Value to set for the actionName property.
    */
    public function setActionName(?ManagedDeviceRemoteAction $value): void {
        $this->getBackingStore()->set('actionName', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the carrierUrl property value. The carrierUrl property
     *  @param string|null $value Value to set for the carrierUrl property.
    */
    public function setCarrierUrl(?string $value): void {
        $this->getBackingStore()->set('carrierUrl', $value);
    }

    /**
     * Sets the deprovisionReason property value. The deprovisionReason property
     *  @param string|null $value Value to set for the deprovisionReason property.
    */
    public function setDeprovisionReason(?string $value): void {
        $this->getBackingStore()->set('deprovisionReason', $value);
    }

    /**
     * Sets the deviceIds property value. The deviceIds property
     *  @param array<string>|null $value Value to set for the deviceIds property.
    */
    public function setDeviceIds(?array $value): void {
        $this->getBackingStore()->set('deviceIds', $value);
    }

    /**
     * Sets the deviceName property value. The deviceName property
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the keepEnrollmentData property value. The keepEnrollmentData property
     *  @param bool|null $value Value to set for the keepEnrollmentData property.
    */
    public function setKeepEnrollmentData(?bool $value): void {
        $this->getBackingStore()->set('keepEnrollmentData', $value);
    }

    /**
     * Sets the keepUserData property value. The keepUserData property
     *  @param bool|null $value Value to set for the keepUserData property.
    */
    public function setKeepUserData(?bool $value): void {
        $this->getBackingStore()->set('keepUserData', $value);
    }

    /**
     * Sets the notificationBody property value. The notificationBody property
     *  @param string|null $value Value to set for the notificationBody property.
    */
    public function setNotificationBody(?string $value): void {
        $this->getBackingStore()->set('notificationBody', $value);
    }

    /**
     * Sets the notificationTitle property value. The notificationTitle property
     *  @param string|null $value Value to set for the notificationTitle property.
    */
    public function setNotificationTitle(?string $value): void {
        $this->getBackingStore()->set('notificationTitle', $value);
    }

    /**
     * Sets the organizationalUnitPath property value. The organizationalUnitPath property
     *  @param string|null $value Value to set for the organizationalUnitPath property.
    */
    public function setOrganizationalUnitPath(?string $value): void {
        $this->getBackingStore()->set('organizationalUnitPath', $value);
    }

    /**
     * Sets the persistEsimDataPlan property value. The persistEsimDataPlan property
     *  @param bool|null $value Value to set for the persistEsimDataPlan property.
    */
    public function setPersistEsimDataPlan(?bool $value): void {
        $this->getBackingStore()->set('persistEsimDataPlan', $value);
    }

}
