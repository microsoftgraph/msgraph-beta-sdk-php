<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MobileAppIntentAndStateDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new mobileAppIntentAndStateDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.mobileAppIntentAndStateDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppIntentAndStateDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppIntentAndStateDetail {
        return new MobileAppIntentAndStateDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the applicationId property value. MobieApp identifier.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->getBackingStore()->get('applicationId');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the displayName property value. The admin provided or imported title of the app.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the displayVersion property value. Human readable version of the application
     * @return string|null
    */
    public function getDisplayVersion(): ?string {
        return $this->getBackingStore()->get('displayVersion');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'displayVersion' => fn(ParseNode $n) => $o->setDisplayVersion($n->getStringValue()),
            'installState' => fn(ParseNode $n) => $o->setInstallState($n->getEnumValue(ResultantAppState::class)),
            'mobileAppIntent' => fn(ParseNode $n) => $o->setMobileAppIntent($n->getEnumValue(MobileAppIntent::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'supportedDeviceTypes' => fn(ParseNode $n) => $o->setSupportedDeviceTypes($n->getCollectionOfObjectValues([MobileAppSupportedDeviceType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     * @return ResultantAppState|null
    */
    public function getInstallState(): ?ResultantAppState {
        return $this->getBackingStore()->get('installState');
    }

    /**
     * Gets the mobileAppIntent property value. Indicates the status of the mobile app on the device.
     * @return MobileAppIntent|null
    */
    public function getMobileAppIntent(): ?MobileAppIntent {
        return $this->getBackingStore()->get('mobileAppIntent');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the supportedDeviceTypes property value. The supported platforms for the app.
     * @return array<MobileAppSupportedDeviceType>|null
    */
    public function getSupportedDeviceTypes(): ?array {
        return $this->getBackingStore()->get('supportedDeviceTypes');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationId', $this->getApplicationId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('displayVersion', $this->getDisplayVersion());
        $writer->writeEnumValue('installState', $this->getInstallState());
        $writer->writeEnumValue('mobileAppIntent', $this->getMobileAppIntent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('supportedDeviceTypes', $this->getSupportedDeviceTypes());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationId property value. MobieApp identifier.
     *  @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

    /**
     * Sets the displayName property value. The admin provided or imported title of the app.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the displayVersion property value. Human readable version of the application
     *  @param string|null $value Value to set for the displayVersion property.
    */
    public function setDisplayVersion(?string $value): void {
        $this->getBackingStore()->set('displayVersion', $value);
    }

    /**
     * Sets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     *  @param ResultantAppState|null $value Value to set for the installState property.
    */
    public function setInstallState(?ResultantAppState $value): void {
        $this->getBackingStore()->set('installState', $value);
    }

    /**
     * Sets the mobileAppIntent property value. Indicates the status of the mobile app on the device.
     *  @param MobileAppIntent|null $value Value to set for the mobileAppIntent property.
    */
    public function setMobileAppIntent(?MobileAppIntent $value): void {
        $this->getBackingStore()->set('mobileAppIntent', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the supportedDeviceTypes property value. The supported platforms for the app.
     *  @param array<MobileAppSupportedDeviceType>|null $value Value to set for the supportedDeviceTypes property.
    */
    public function setSupportedDeviceTypes(?array $value): void {
        $this->getBackingStore()->set('supportedDeviceTypes', $value);
    }

}
