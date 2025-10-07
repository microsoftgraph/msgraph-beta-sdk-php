<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties for policy run state of the device health script.
*/
class DeviceHealthScriptPolicyState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceHealthScriptPolicyState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptPolicyState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptPolicyState {
        return new DeviceHealthScriptPolicyState();
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
     * Gets the assignmentFilterIds property value. A list of the assignment filter ids used for health script applicability evaluation
     * @return array<string>|null
    */
    public function getAssignmentFilterIds(): ?array {
        $val = $this->getBackingStore()->get('assignmentFilterIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterIds'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the detectionState property value. Indicates the type of execution status of the device management script.
     * @return RunState|null
    */
    public function getDetectionState(): ?RunState {
        $val = $this->getBackingStore()->get('detectionState');
        if (is_null($val) || $val instanceof RunState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionState'");
    }

    /**
     * Gets the deviceId property value. The Intune device Id
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the deviceName property value. Display name of the device
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * Gets the expectedStateUpdateDateTime property value. The next timestamp of when the device health script is expected to execute
     * @return DateTime|null
    */
    public function getExpectedStateUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expectedStateUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expectedStateUpdateDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentFilterIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAssignmentFilterIds($val);
            },
            'detectionState' => fn(ParseNode $n) => $o->setDetectionState($n->getEnumValue(RunState::class)),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'expectedStateUpdateDateTime' => fn(ParseNode $n) => $o->setExpectedStateUpdateDateTime($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastStateUpdateDateTime' => fn(ParseNode $n) => $o->setLastStateUpdateDateTime($n->getDateTimeValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'postRemediationDetectionScriptError' => fn(ParseNode $n) => $o->setPostRemediationDetectionScriptError($n->getStringValue()),
            'postRemediationDetectionScriptOutput' => fn(ParseNode $n) => $o->setPostRemediationDetectionScriptOutput($n->getStringValue()),
            'preRemediationDetectionScriptError' => fn(ParseNode $n) => $o->setPreRemediationDetectionScriptError($n->getStringValue()),
            'preRemediationDetectionScriptOutput' => fn(ParseNode $n) => $o->setPreRemediationDetectionScriptOutput($n->getStringValue()),
            'remediationScriptError' => fn(ParseNode $n) => $o->setRemediationScriptError($n->getStringValue()),
            'remediationState' => fn(ParseNode $n) => $o->setRemediationState($n->getEnumValue(RemediationState::class)),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Key of the device health script policy state is a concatenation of the MT sideCar policy Id and Intune device Id
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the lastStateUpdateDateTime property value. The last timestamp of when the device health script executed
     * @return DateTime|null
    */
    public function getLastStateUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastStateUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastStateUpdateDateTime'");
    }

    /**
     * Gets the lastSyncDateTime property value. The last time that Intune Managment Extension synced with Intune
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
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
     * Gets the osVersion property value. Value of the OS Version in string
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the policyId property value. The MT sideCar policy Id
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the policyName property value. Display name of the device health script
     * @return string|null
    */
    public function getPolicyName(): ?string {
        $val = $this->getBackingStore()->get('policyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyName'");
    }

    /**
     * Gets the postRemediationDetectionScriptError property value. Error from the detection script after remediation
     * @return string|null
    */
    public function getPostRemediationDetectionScriptError(): ?string {
        $val = $this->getBackingStore()->get('postRemediationDetectionScriptError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postRemediationDetectionScriptError'");
    }

    /**
     * Gets the postRemediationDetectionScriptOutput property value. Detection script output after remediation
     * @return string|null
    */
    public function getPostRemediationDetectionScriptOutput(): ?string {
        $val = $this->getBackingStore()->get('postRemediationDetectionScriptOutput');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postRemediationDetectionScriptOutput'");
    }

    /**
     * Gets the preRemediationDetectionScriptError property value. Error from the detection script before remediation
     * @return string|null
    */
    public function getPreRemediationDetectionScriptError(): ?string {
        $val = $this->getBackingStore()->get('preRemediationDetectionScriptError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preRemediationDetectionScriptError'");
    }

    /**
     * Gets the preRemediationDetectionScriptOutput property value. Output of the detection script before remediation
     * @return string|null
    */
    public function getPreRemediationDetectionScriptOutput(): ?string {
        $val = $this->getBackingStore()->get('preRemediationDetectionScriptOutput');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preRemediationDetectionScriptOutput'");
    }

    /**
     * Gets the remediationScriptError property value. Error output of the remediation script
     * @return string|null
    */
    public function getRemediationScriptError(): ?string {
        $val = $this->getBackingStore()->get('remediationScriptError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationScriptError'");
    }

    /**
     * Gets the remediationState property value. Indicates the type of execution status of the device management script.
     * @return RemediationState|null
    */
    public function getRemediationState(): ?RemediationState {
        $val = $this->getBackingStore()->get('remediationState');
        if (is_null($val) || $val instanceof RemediationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationState'");
    }

    /**
     * Gets the userName property value. Name of the user whom ran the device health script
     * @return string|null
    */
    public function getUserName(): ?string {
        $val = $this->getBackingStore()->get('userName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('assignmentFilterIds', $this->getAssignmentFilterIds());
        $writer->writeEnumValue('detectionState', $this->getDetectionState());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeDateTimeValue('expectedStateUpdateDateTime', $this->getExpectedStateUpdateDateTime());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastStateUpdateDateTime', $this->getLastStateUpdateDateTime());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('policyName', $this->getPolicyName());
        $writer->writeStringValue('postRemediationDetectionScriptError', $this->getPostRemediationDetectionScriptError());
        $writer->writeStringValue('postRemediationDetectionScriptOutput', $this->getPostRemediationDetectionScriptOutput());
        $writer->writeStringValue('preRemediationDetectionScriptError', $this->getPreRemediationDetectionScriptError());
        $writer->writeStringValue('preRemediationDetectionScriptOutput', $this->getPreRemediationDetectionScriptOutput());
        $writer->writeStringValue('remediationScriptError', $this->getRemediationScriptError());
        $writer->writeEnumValue('remediationState', $this->getRemediationState());
        $writer->writeStringValue('userName', $this->getUserName());
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
     * Sets the assignmentFilterIds property value. A list of the assignment filter ids used for health script applicability evaluation
     * @param array<string>|null $value Value to set for the assignmentFilterIds property.
    */
    public function setAssignmentFilterIds(?array $value): void {
        $this->getBackingStore()->set('assignmentFilterIds', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the detectionState property value. Indicates the type of execution status of the device management script.
     * @param RunState|null $value Value to set for the detectionState property.
    */
    public function setDetectionState(?RunState $value): void {
        $this->getBackingStore()->set('detectionState', $value);
    }

    /**
     * Sets the deviceId property value. The Intune device Id
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. Display name of the device
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the expectedStateUpdateDateTime property value. The next timestamp of when the device health script is expected to execute
     * @param DateTime|null $value Value to set for the expectedStateUpdateDateTime property.
    */
    public function setExpectedStateUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expectedStateUpdateDateTime', $value);
    }

    /**
     * Sets the id property value. Key of the device health script policy state is a concatenation of the MT sideCar policy Id and Intune device Id
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the lastStateUpdateDateTime property value. The last timestamp of when the device health script executed
     * @param DateTime|null $value Value to set for the lastStateUpdateDateTime property.
    */
    public function setLastStateUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastStateUpdateDateTime', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. The last time that Intune Managment Extension synced with Intune
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the osVersion property value. Value of the OS Version in string
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the policyId property value. The MT sideCar policy Id
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyName property value. Display name of the device health script
     * @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

    /**
     * Sets the postRemediationDetectionScriptError property value. Error from the detection script after remediation
     * @param string|null $value Value to set for the postRemediationDetectionScriptError property.
    */
    public function setPostRemediationDetectionScriptError(?string $value): void {
        $this->getBackingStore()->set('postRemediationDetectionScriptError', $value);
    }

    /**
     * Sets the postRemediationDetectionScriptOutput property value. Detection script output after remediation
     * @param string|null $value Value to set for the postRemediationDetectionScriptOutput property.
    */
    public function setPostRemediationDetectionScriptOutput(?string $value): void {
        $this->getBackingStore()->set('postRemediationDetectionScriptOutput', $value);
    }

    /**
     * Sets the preRemediationDetectionScriptError property value. Error from the detection script before remediation
     * @param string|null $value Value to set for the preRemediationDetectionScriptError property.
    */
    public function setPreRemediationDetectionScriptError(?string $value): void {
        $this->getBackingStore()->set('preRemediationDetectionScriptError', $value);
    }

    /**
     * Sets the preRemediationDetectionScriptOutput property value. Output of the detection script before remediation
     * @param string|null $value Value to set for the preRemediationDetectionScriptOutput property.
    */
    public function setPreRemediationDetectionScriptOutput(?string $value): void {
        $this->getBackingStore()->set('preRemediationDetectionScriptOutput', $value);
    }

    /**
     * Sets the remediationScriptError property value. Error output of the remediation script
     * @param string|null $value Value to set for the remediationScriptError property.
    */
    public function setRemediationScriptError(?string $value): void {
        $this->getBackingStore()->set('remediationScriptError', $value);
    }

    /**
     * Sets the remediationState property value. Indicates the type of execution status of the device management script.
     * @param RemediationState|null $value Value to set for the remediationState property.
    */
    public function setRemediationState(?RemediationState $value): void {
        $this->getBackingStore()->set('remediationState', $value);
    }

    /**
     * Sets the userName property value. Name of the user whom ran the device health script
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
