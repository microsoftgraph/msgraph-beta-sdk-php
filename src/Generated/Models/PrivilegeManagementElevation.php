<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The endpoint privilege management elevation result entity representing a single elevation action on a client device.
*/
class PrivilegeManagementElevation extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrivilegeManagementElevation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegeManagementElevation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegeManagementElevation {
        return new PrivilegeManagementElevation();
    }

    /**
     * Gets the certificatePayload property value. The certificate payload of the application. This is computed by hashing the certificate information on the client. Example: 32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a50
     * @return string|null
    */
    public function getCertificatePayload(): ?string {
        $val = $this->getBackingStore()->get('certificatePayload');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificatePayload'");
    }

    /**
     * Gets the companyName property value. The company name of the application. This value is set by the creator of the application. Example: Microsoft Corporation
     * @return string|null
    */
    public function getCompanyName(): ?string {
        $val = $this->getBackingStore()->get('companyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyName'");
    }

    /**
     * Gets the deviceId property value. The Intune deviceId. Unique identifier for the managed device. Example: 92ce5047-9553-4731-817f-9b401a999a1b
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
     * Gets the deviceName property value. The name associated with the device in the intune database. Example: JOHNDOE-LAPTOP.
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
     * Gets the elevationType property value. Indicates the type of elevation occured
     * @return PrivilegeManagementElevationType|null
    */
    public function getElevationType(): ?PrivilegeManagementElevationType {
        $val = $this->getBackingStore()->get('elevationType');
        if (is_null($val) || $val instanceof PrivilegeManagementElevationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'elevationType'");
    }

    /**
     * Gets the eventDateTime property value. The date and time when the application was elevated. Example:2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificatePayload' => fn(ParseNode $n) => $o->setCertificatePayload($n->getStringValue()),
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'elevationType' => fn(ParseNode $n) => $o->setElevationType($n->getEnumValue(PrivilegeManagementElevationType::class)),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'fileDescription' => fn(ParseNode $n) => $o->setFileDescription($n->getStringValue()),
            'filePath' => fn(ParseNode $n) => $o->setFilePath($n->getStringValue()),
            'fileVersion' => fn(ParseNode $n) => $o->setFileVersion($n->getStringValue()),
            'hash' => fn(ParseNode $n) => $o->setHash($n->getStringValue()),
            'internalName' => fn(ParseNode $n) => $o->setInternalName($n->getStringValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'parentProcessName' => fn(ParseNode $n) => $o->setParentProcessName($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'processType' => fn(ParseNode $n) => $o->setProcessType($n->getEnumValue(PrivilegeManagementProcessType::class)),
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'result' => fn(ParseNode $n) => $o->setResult($n->getIntegerValue()),
            'ruleId' => fn(ParseNode $n) => $o->setRuleId($n->getStringValue()),
            'systemInitiatedElevation' => fn(ParseNode $n) => $o->setSystemInitiatedElevation($n->getBooleanValue()),
            'upn' => fn(ParseNode $n) => $o->setUpn($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(PrivilegeManagementEndUserType::class)),
        ]);
    }

    /**
     * Gets the fileDescription property value. The file description of the application. This value is set by the creator of the application. Example: Editor of multiple coding languages.
     * @return string|null
    */
    public function getFileDescription(): ?string {
        $val = $this->getBackingStore()->get('fileDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileDescription'");
    }

    /**
     * Gets the filePath property value. The full file path of the application including the filename and file extension. Example: C:/Program Files/vscode.exe
     * @return string|null
    */
    public function getFilePath(): ?string {
        $val = $this->getBackingStore()->get('filePath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePath'");
    }

    /**
     * Gets the fileVersion property value. The version of the application. This value is set by the creator of the application. Example: 6.2211.1035.1000
     * @return string|null
    */
    public function getFileVersion(): ?string {
        $val = $this->getBackingStore()->get('fileVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVersion'");
    }

    /**
     * Gets the hash property value. The sha256 hash of the application. Example: 32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a57
     * @return string|null
    */
    public function getHash(): ?string {
        $val = $this->getBackingStore()->get('hash');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hash'");
    }

    /**
     * Gets the internalName property value. The internal name of the application. This value is set by the creator of the application. Example: VS code
     * @return string|null
    */
    public function getInternalName(): ?string {
        $val = $this->getBackingStore()->get('internalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internalName'");
    }

    /**
     * Gets the justification property value. The justification to elevate the application. This is an input by the user when the privilegeManagementElevationType is of type userConfirmedElevation or support approved elevation. This will be null in all other scenarios. The length is capped at 256 char, enforced on the client side. Example: To install debug tool..
     * @return string|null
    */
    public function getJustification(): ?string {
        $val = $this->getBackingStore()->get('justification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justification'");
    }

    /**
     * Gets the parentProcessName property value. The name of parent process associated with the elevated process. This is always populated for both parent and child process types
     * @return string|null
    */
    public function getParentProcessName(): ?string {
        $val = $this->getBackingStore()->get('parentProcessName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentProcessName'");
    }

    /**
     * Gets the policyId property value. Unique Identifier of the policy configured to run the application with elevated access
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
     * Gets the policyName property value. The name of the policy configured to run the application in elevated access
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
     * Gets the processType property value. Indicates the type of elevated process
     * @return PrivilegeManagementProcessType|null
    */
    public function getProcessType(): ?PrivilegeManagementProcessType {
        $val = $this->getBackingStore()->get('processType');
        if (is_null($val) || $val instanceof PrivilegeManagementProcessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processType'");
    }

    /**
     * Gets the productName property value. The product name of the application. This value is set by the creator of the application. Example: Visual Studio
     * @return string|null
    */
    public function getProductName(): ?string {
        $val = $this->getBackingStore()->get('productName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productName'");
    }

    /**
     * Gets the result property value. The result of the elevation action with 0 being success, and everything else being exit code if the elevation was unsuccessful. The value will always be 0 on all unmanaged elevation. Example: 0. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getResult(): ?int {
        $val = $this->getBackingStore()->get('result');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'result'");
    }

    /**
     * Gets the ruleId property value. Unique identifier of the rule configured to run the application with elevated access
     * @return string|null
    */
    public function getRuleId(): ?string {
        $val = $this->getBackingStore()->get('ruleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ruleId'");
    }

    /**
     * Gets the systemInitiatedElevation property value. To identify if the elevation is initiated by system or user interaction
     * @return bool|null
    */
    public function getSystemInitiatedElevation(): ?bool {
        $val = $this->getBackingStore()->get('systemInitiatedElevation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemInitiatedElevation'");
    }

    /**
     * Gets the upn property value. The User Principal Name of the user who performed the elevation. Example: john@domain.com
     * @return string|null
    */
    public function getUpn(): ?string {
        $val = $this->getBackingStore()->get('upn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upn'");
    }

    /**
     * Gets the userType property value. The type of user account on Windows that was used to performed the elevation.
     * @return PrivilegeManagementEndUserType|null
    */
    public function getUserType(): ?PrivilegeManagementEndUserType {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || $val instanceof PrivilegeManagementEndUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificatePayload', $this->getCertificatePayload());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeEnumValue('elevationType', $this->getElevationType());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('fileDescription', $this->getFileDescription());
        $writer->writeStringValue('filePath', $this->getFilePath());
        $writer->writeStringValue('fileVersion', $this->getFileVersion());
        $writer->writeStringValue('hash', $this->getHash());
        $writer->writeStringValue('internalName', $this->getInternalName());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeStringValue('parentProcessName', $this->getParentProcessName());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('policyName', $this->getPolicyName());
        $writer->writeEnumValue('processType', $this->getProcessType());
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeIntegerValue('result', $this->getResult());
        $writer->writeStringValue('ruleId', $this->getRuleId());
        $writer->writeBooleanValue('systemInitiatedElevation', $this->getSystemInitiatedElevation());
        $writer->writeStringValue('upn', $this->getUpn());
        $writer->writeEnumValue('userType', $this->getUserType());
    }

    /**
     * Sets the certificatePayload property value. The certificate payload of the application. This is computed by hashing the certificate information on the client. Example: 32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a50
     * @param string|null $value Value to set for the certificatePayload property.
    */
    public function setCertificatePayload(?string $value): void {
        $this->getBackingStore()->set('certificatePayload', $value);
    }

    /**
     * Sets the companyName property value. The company name of the application. This value is set by the creator of the application. Example: Microsoft Corporation
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->getBackingStore()->set('companyName', $value);
    }

    /**
     * Sets the deviceId property value. The Intune deviceId. Unique identifier for the managed device. Example: 92ce5047-9553-4731-817f-9b401a999a1b
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. The name associated with the device in the intune database. Example: JOHNDOE-LAPTOP.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the elevationType property value. Indicates the type of elevation occured
     * @param PrivilegeManagementElevationType|null $value Value to set for the elevationType property.
    */
    public function setElevationType(?PrivilegeManagementElevationType $value): void {
        $this->getBackingStore()->set('elevationType', $value);
    }

    /**
     * Sets the eventDateTime property value. The date and time when the application was elevated. Example:2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the fileDescription property value. The file description of the application. This value is set by the creator of the application. Example: Editor of multiple coding languages.
     * @param string|null $value Value to set for the fileDescription property.
    */
    public function setFileDescription(?string $value): void {
        $this->getBackingStore()->set('fileDescription', $value);
    }

    /**
     * Sets the filePath property value. The full file path of the application including the filename and file extension. Example: C:/Program Files/vscode.exe
     * @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value): void {
        $this->getBackingStore()->set('filePath', $value);
    }

    /**
     * Sets the fileVersion property value. The version of the application. This value is set by the creator of the application. Example: 6.2211.1035.1000
     * @param string|null $value Value to set for the fileVersion property.
    */
    public function setFileVersion(?string $value): void {
        $this->getBackingStore()->set('fileVersion', $value);
    }

    /**
     * Sets the hash property value. The sha256 hash of the application. Example: 32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a57
     * @param string|null $value Value to set for the hash property.
    */
    public function setHash(?string $value): void {
        $this->getBackingStore()->set('hash', $value);
    }

    /**
     * Sets the internalName property value. The internal name of the application. This value is set by the creator of the application. Example: VS code
     * @param string|null $value Value to set for the internalName property.
    */
    public function setInternalName(?string $value): void {
        $this->getBackingStore()->set('internalName', $value);
    }

    /**
     * Sets the justification property value. The justification to elevate the application. This is an input by the user when the privilegeManagementElevationType is of type userConfirmedElevation or support approved elevation. This will be null in all other scenarios. The length is capped at 256 char, enforced on the client side. Example: To install debug tool..
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the parentProcessName property value. The name of parent process associated with the elevated process. This is always populated for both parent and child process types
     * @param string|null $value Value to set for the parentProcessName property.
    */
    public function setParentProcessName(?string $value): void {
        $this->getBackingStore()->set('parentProcessName', $value);
    }

    /**
     * Sets the policyId property value. Unique Identifier of the policy configured to run the application with elevated access
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyName property value. The name of the policy configured to run the application in elevated access
     * @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

    /**
     * Sets the processType property value. Indicates the type of elevated process
     * @param PrivilegeManagementProcessType|null $value Value to set for the processType property.
    */
    public function setProcessType(?PrivilegeManagementProcessType $value): void {
        $this->getBackingStore()->set('processType', $value);
    }

    /**
     * Sets the productName property value. The product name of the application. This value is set by the creator of the application. Example: Visual Studio
     * @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the result property value. The result of the elevation action with 0 being success, and everything else being exit code if the elevation was unsuccessful. The value will always be 0 on all unmanaged elevation. Example: 0. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the result property.
    */
    public function setResult(?int $value): void {
        $this->getBackingStore()->set('result', $value);
    }

    /**
     * Sets the ruleId property value. Unique identifier of the rule configured to run the application with elevated access
     * @param string|null $value Value to set for the ruleId property.
    */
    public function setRuleId(?string $value): void {
        $this->getBackingStore()->set('ruleId', $value);
    }

    /**
     * Sets the systemInitiatedElevation property value. To identify if the elevation is initiated by system or user interaction
     * @param bool|null $value Value to set for the systemInitiatedElevation property.
    */
    public function setSystemInitiatedElevation(?bool $value): void {
        $this->getBackingStore()->set('systemInitiatedElevation', $value);
    }

    /**
     * Sets the upn property value. The User Principal Name of the user who performed the elevation. Example: john@domain.com
     * @param string|null $value Value to set for the upn property.
    */
    public function setUpn(?string $value): void {
        $this->getBackingStore()->set('upn', $value);
    }

    /**
     * Sets the userType property value. The type of user account on Windows that was used to performed the elevation.
     * @param PrivilegeManagementEndUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?PrivilegeManagementEndUserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
