<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppRelationshipState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceId The corresponding device id.
    */
    private ?string $deviceId = null;
    
    /**
     * @var int|null $errorCode The error code for install or uninstall failures of target app.
    */
    private ?int $errorCode = null;
    
    /**
     * @var ResultantAppState|null $installState A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
    */
    private ?ResultantAppState $installState = null;
    
    /**
     * @var ResultantAppStateDetail|null $installStateDetail Enum indicating additional details regarding why an application has a particular install state.
    */
    private ?ResultantAppStateDetail $installStateDetail = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $sourceIds The collection of source mobile app's ids.
    */
    private ?array $sourceIds = null;
    
    /**
     * @var string|null $targetDisplayName The related target app's display name.
    */
    private ?string $targetDisplayName = null;
    
    /**
     * @var string|null $targetId The related target app's id.
    */
    private ?string $targetId = null;
    
    /**
     * @var DateTime|null $targetLastSyncDateTime The last sync time of the target app.
    */
    private ?DateTime $targetLastSyncDateTime = null;
    
    /**
     * Instantiates a new mobileAppRelationshipState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.mobileAppRelationshipState');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceId property value. The corresponding device id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the errorCode property value. The error code for install or uninstall failures of target app.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'installState' => function (ParseNode $n) use ($o) { $o->setInstallState($n->getEnumValue(ResultantAppState::class)); },
            'installStateDetail' => function (ParseNode $n) use ($o) { $o->setInstallStateDetail($n->getEnumValue(ResultantAppStateDetail::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'sourceIds' => function (ParseNode $n) use ($o) { $o->setSourceIds($n->getCollectionOfPrimitiveValues()); },
            'targetDisplayName' => function (ParseNode $n) use ($o) { $o->setTargetDisplayName($n->getStringValue()); },
            'targetId' => function (ParseNode $n) use ($o) { $o->setTargetId($n->getStringValue()); },
            'targetLastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setTargetLastSyncDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     * @return ResultantAppState|null
    */
    public function getInstallState(): ?ResultantAppState {
        return $this->installState;
    }

    /**
     * Gets the installStateDetail property value. Enum indicating additional details regarding why an application has a particular install state.
     * @return ResultantAppStateDetail|null
    */
    public function getInstallStateDetail(): ?ResultantAppStateDetail {
        return $this->installStateDetail;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the sourceIds property value. The collection of source mobile app's ids.
     * @return array<string>|null
    */
    public function getSourceIds(): ?array {
        return $this->sourceIds;
    }

    /**
     * Gets the targetDisplayName property value. The related target app's display name.
     * @return string|null
    */
    public function getTargetDisplayName(): ?string {
        return $this->targetDisplayName;
    }

    /**
     * Gets the targetId property value. The related target app's id.
     * @return string|null
    */
    public function getTargetId(): ?string {
        return $this->targetId;
    }

    /**
     * Gets the targetLastSyncDateTime property value. The last sync time of the target app.
     * @return DateTime|null
    */
    public function getTargetLastSyncDateTime(): ?DateTime {
        return $this->targetLastSyncDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeEnumValue('installState', $this->installState);
        $writer->writeEnumValue('installStateDetail', $this->installStateDetail);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfPrimitiveValues('sourceIds', $this->sourceIds);
        $writer->writeStringValue('targetDisplayName', $this->targetDisplayName);
        $writer->writeStringValue('targetId', $this->targetId);
        $writer->writeDateTimeValue('targetLastSyncDateTime', $this->targetLastSyncDateTime);
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
     * Sets the deviceId property value. The corresponding device id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the errorCode property value. The error code for install or uninstall failures of target app.
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     *  @param ResultantAppState|null $value Value to set for the installState property.
    */
    public function setInstallState(?ResultantAppState $value ): void {
        $this->installState = $value;
    }

    /**
     * Sets the installStateDetail property value. Enum indicating additional details regarding why an application has a particular install state.
     *  @param ResultantAppStateDetail|null $value Value to set for the installStateDetail property.
    */
    public function setInstallStateDetail(?ResultantAppStateDetail $value ): void {
        $this->installStateDetail = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the sourceIds property value. The collection of source mobile app's ids.
     *  @param array<string>|null $value Value to set for the sourceIds property.
    */
    public function setSourceIds(?array $value ): void {
        $this->sourceIds = $value;
    }

    /**
     * Sets the targetDisplayName property value. The related target app's display name.
     *  @param string|null $value Value to set for the targetDisplayName property.
    */
    public function setTargetDisplayName(?string $value ): void {
        $this->targetDisplayName = $value;
    }

    /**
     * Sets the targetId property value. The related target app's id.
     *  @param string|null $value Value to set for the targetId property.
    */
    public function setTargetId(?string $value ): void {
        $this->targetId = $value;
    }

    /**
     * Sets the targetLastSyncDateTime property value. The last sync time of the target app.
     *  @param DateTime|null $value Value to set for the targetLastSyncDateTime property.
    */
    public function setTargetLastSyncDateTime(?DateTime $value ): void {
        $this->targetLastSyncDateTime = $value;
    }

}
