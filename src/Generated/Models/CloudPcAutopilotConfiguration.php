<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcAutopilotConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcAutopilotConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcAutopilotConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcAutopilotConfiguration {
        return new CloudPcAutopilotConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the applicationTimeoutInMinutes property value. Indicates the number of minutes allowed for the Autopilot application to apply the device preparation profile (DPP) configurations to the device. If the Autopilot application doesn't finish within the specified time (applicationTimeoutInMinutes), the application error is added to the statusDetail property of the cloudPC object. The supported value is an integer between 30 and 360. Required.
     * @return int|null
    */
    public function getApplicationTimeoutInMinutes(): ?int {
        $val = $this->getBackingStore()->get('applicationTimeoutInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationTimeoutInMinutes'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the devicePreparationProfileId property value. The unique identifier (ID) of the Autopilot device preparation profile (DPP) that links a Windows Autopilot device preparation policy to ensure that devices are ready for users after provisioning. Required.
     * @return string|null
    */
    public function getDevicePreparationProfileId(): ?string {
        $val = $this->getBackingStore()->get('devicePreparationProfileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devicePreparationProfileId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationTimeoutInMinutes' => fn(ParseNode $n) => $o->setApplicationTimeoutInMinutes($n->getIntegerValue()),
            'devicePreparationProfileId' => fn(ParseNode $n) => $o->setDevicePreparationProfileId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onFailureDeviceAccessDenied' => fn(ParseNode $n) => $o->setOnFailureDeviceAccessDenied($n->getBooleanValue()),
        ];
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
     * Gets the onFailureDeviceAccessDenied property value. Indicates whether the access to the device is allowed when the application of Autopilot device preparation profile (DPP) configurations fails or times out. If true, the status of the device is failed and the device is unable to access; otherwise, the status of the device is provisionedWithWarnings and the device is allowed to access. The default value is false. Required.
     * @return bool|null
    */
    public function getOnFailureDeviceAccessDenied(): ?bool {
        $val = $this->getBackingStore()->get('onFailureDeviceAccessDenied');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onFailureDeviceAccessDenied'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('applicationTimeoutInMinutes', $this->getApplicationTimeoutInMinutes());
        $writer->writeStringValue('devicePreparationProfileId', $this->getDevicePreparationProfileId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('onFailureDeviceAccessDenied', $this->getOnFailureDeviceAccessDenied());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationTimeoutInMinutes property value. Indicates the number of minutes allowed for the Autopilot application to apply the device preparation profile (DPP) configurations to the device. If the Autopilot application doesn't finish within the specified time (applicationTimeoutInMinutes), the application error is added to the statusDetail property of the cloudPC object. The supported value is an integer between 30 and 360. Required.
     * @param int|null $value Value to set for the applicationTimeoutInMinutes property.
    */
    public function setApplicationTimeoutInMinutes(?int $value): void {
        $this->getBackingStore()->set('applicationTimeoutInMinutes', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the devicePreparationProfileId property value. The unique identifier (ID) of the Autopilot device preparation profile (DPP) that links a Windows Autopilot device preparation policy to ensure that devices are ready for users after provisioning. Required.
     * @param string|null $value Value to set for the devicePreparationProfileId property.
    */
    public function setDevicePreparationProfileId(?string $value): void {
        $this->getBackingStore()->set('devicePreparationProfileId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onFailureDeviceAccessDenied property value. Indicates whether the access to the device is allowed when the application of Autopilot device preparation profile (DPP) configurations fails or times out. If true, the status of the device is failed and the device is unable to access; otherwise, the status of the device is provisionedWithWarnings and the device is allowed to access. The default value is false. Required.
     * @param bool|null $value Value to set for the onFailureDeviceAccessDenied property.
    */
    public function setOnFailureDeviceAccessDenied(?bool $value): void {
        $this->getBackingStore()->set('onFailureDeviceAccessDenied', $value);
    }

}
