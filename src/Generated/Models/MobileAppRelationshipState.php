<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Describes the installation status details of the child app in the context of UPN and device id.
*/
class MobileAppRelationshipState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new mobileAppRelationshipState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppRelationshipState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppRelationshipState {
        return new MobileAppRelationshipState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the deviceId property value. The corresponding device id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the errorCode property value. The error code for install or uninstall failures of target app.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            'installState' => fn(ParseNode $n) => $o->setInstallState($n->getEnumValue(ResultantAppState::class)),
            'installStateDetail' => fn(ParseNode $n) => $o->setInstallStateDetail($n->getEnumValue(ResultantAppStateDetail::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sourceIds' => fn(ParseNode $n) => $o->setSourceIds($n->getCollectionOfPrimitiveValues()),
            'targetDisplayName' => fn(ParseNode $n) => $o->setTargetDisplayName($n->getStringValue()),
            'targetId' => fn(ParseNode $n) => $o->setTargetId($n->getStringValue()),
            'targetLastSyncDateTime' => fn(ParseNode $n) => $o->setTargetLastSyncDateTime($n->getDateTimeValue()),
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
     * Gets the installStateDetail property value. Enum indicating additional details regarding why an application has a particular install state.
     * @return ResultantAppStateDetail|null
    */
    public function getInstallStateDetail(): ?ResultantAppStateDetail {
        return $this->getBackingStore()->get('installStateDetail');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the sourceIds property value. The collection of source mobile app's ids.
     * @return array<string>|null
    */
    public function getSourceIds(): ?array {
        return $this->getBackingStore()->get('sourceIds');
    }

    /**
     * Gets the targetDisplayName property value. The related target app's display name.
     * @return string|null
    */
    public function getTargetDisplayName(): ?string {
        return $this->getBackingStore()->get('targetDisplayName');
    }

    /**
     * Gets the targetId property value. The related target app's id.
     * @return string|null
    */
    public function getTargetId(): ?string {
        return $this->getBackingStore()->get('targetId');
    }

    /**
     * Gets the targetLastSyncDateTime property value. The last sync time of the target app.
     * @return DateTime|null
    */
    public function getTargetLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('targetLastSyncDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
        $writer->writeEnumValue('installState', $this->getInstallState());
        $writer->writeEnumValue('installStateDetail', $this->getInstallStateDetail());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('sourceIds', $this->getSourceIds());
        $writer->writeStringValue('targetDisplayName', $this->getTargetDisplayName());
        $writer->writeStringValue('targetId', $this->getTargetId());
        $writer->writeDateTimeValue('targetLastSyncDateTime', $this->getTargetLastSyncDateTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deviceId property value. The corresponding device id.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the errorCode property value. The error code for install or uninstall failures of target app.
     * @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     * @param ResultantAppState|null $value Value to set for the installState property.
    */
    public function setInstallState(?ResultantAppState $value): void {
        $this->getBackingStore()->set('installState', $value);
    }

    /**
     * Sets the installStateDetail property value. Enum indicating additional details regarding why an application has a particular install state.
     * @param ResultantAppStateDetail|null $value Value to set for the installStateDetail property.
    */
    public function setInstallStateDetail(?ResultantAppStateDetail $value): void {
        $this->getBackingStore()->set('installStateDetail', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sourceIds property value. The collection of source mobile app's ids.
     * @param array<string>|null $value Value to set for the sourceIds property.
    */
    public function setSourceIds(?array $value): void {
        $this->getBackingStore()->set('sourceIds', $value);
    }

    /**
     * Sets the targetDisplayName property value. The related target app's display name.
     * @param string|null $value Value to set for the targetDisplayName property.
    */
    public function setTargetDisplayName(?string $value): void {
        $this->getBackingStore()->set('targetDisplayName', $value);
    }

    /**
     * Sets the targetId property value. The related target app's id.
     * @param string|null $value Value to set for the targetId property.
    */
    public function setTargetId(?string $value): void {
        $this->getBackingStore()->set('targetId', $value);
    }

    /**
     * Sets the targetLastSyncDateTime property value. The last sync time of the target app.
     * @param DateTime|null $value Value to set for the targetLastSyncDateTime property.
    */
    public function setTargetLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('targetLastSyncDateTime', $value);
    }

}
