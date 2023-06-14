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
     * Instantiates a new privilegeManagementElevation and sets the default values.
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
     * Gets the certificatePayload property value. The certificate payload of the application. This is computed by hashing the certificate information on the client. Example: `32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a50`
     * @return string|null
    */
    public function getCertificatePayload(): ?string {
        return $this->getBackingStore()->get('certificatePayload');
    }

    /**
     * Gets the companyName property value. The company name of the application. This value is set by the creator of the application. Example: `Microsoft Corporation`
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->getBackingStore()->get('companyName');
    }

    /**
     * Gets the deviceId property value. The Intune deviceId. Unique identifier for the managed device. Example: `92ce5047-9553-4731-817f-9b401a999a1b`
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceName property value. The name associated with the device in the intune database. Example: `JOHNDOE-LAPTOP`.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the elevationType property value. Indicates the type of elevation occured
     * @return PrivilegeManagementElevationType|null
    */
    public function getElevationType(): ?PrivilegeManagementElevationType {
        return $this->getBackingStore()->get('elevationType');
    }

    /**
     * Gets the eventDateTime property value. The date and time when the application was elevated. Example:`2014-01-01T00:00:00Z`
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        return $this->getBackingStore()->get('eventDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'result' => fn(ParseNode $n) => $o->setResult($n->getIntegerValue()),
            'upn' => fn(ParseNode $n) => $o->setUpn($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(PrivilegeManagementEndUserType::class)),
        ]);
    }

    /**
     * Gets the fileDescription property value. The file description of the application. This value is set by the creator of the application. Example: `Editor of multiple coding languages.`
     * @return string|null
    */
    public function getFileDescription(): ?string {
        return $this->getBackingStore()->get('fileDescription');
    }

    /**
     * Gets the filePath property value. The full file path of the application including the filename and file extension. Example: `C:/Program Files/vscode.exe`
     * @return string|null
    */
    public function getFilePath(): ?string {
        return $this->getBackingStore()->get('filePath');
    }

    /**
     * Gets the fileVersion property value. The version of the application. This value is set by the creator of the application. Example: `6.2211.1035.1000`
     * @return string|null
    */
    public function getFileVersion(): ?string {
        return $this->getBackingStore()->get('fileVersion');
    }

    /**
     * Gets the hash property value. The sha256 hash of the application. Example: `32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a57`
     * @return string|null
    */
    public function getHash(): ?string {
        return $this->getBackingStore()->get('hash');
    }

    /**
     * Gets the internalName property value. The internal name of the application. This value is set by the creator of the application. Example: `VS code`
     * @return string|null
    */
    public function getInternalName(): ?string {
        return $this->getBackingStore()->get('internalName');
    }

    /**
     * Gets the justification property value. The justification to elevate the application. This is an input by the user when the privilegeManagementElevationType is of type userConfirmedElevation or support approved elevation. This will be null in all other scenarios. The length is capped at 256 char, enforced on the client side. Example: `To install debug tool.`.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->getBackingStore()->get('justification');
    }

    /**
     * Gets the productName property value. The product name of the application. This value is set by the creator of the application. Example: `Visual Studio`
     * @return string|null
    */
    public function getProductName(): ?string {
        return $this->getBackingStore()->get('productName');
    }

    /**
     * Gets the result property value. The result of the elevation action with 0 being success, and everything else being exit code if the elevation was unsuccessful. The value will always be 0 on all unmanaged elevation. Example: `0`. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getResult(): ?int {
        return $this->getBackingStore()->get('result');
    }

    /**
     * Gets the upn property value. The User Principal Name of the user who performed the elevation. Example: `john@domain.com`
     * @return string|null
    */
    public function getUpn(): ?string {
        return $this->getBackingStore()->get('upn');
    }

    /**
     * Gets the userType property value. The type of user account on Windows that was used to performed the elevation.
     * @return PrivilegeManagementEndUserType|null
    */
    public function getUserType(): ?PrivilegeManagementEndUserType {
        return $this->getBackingStore()->get('userType');
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
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeIntegerValue('result', $this->getResult());
        $writer->writeStringValue('upn', $this->getUpn());
        $writer->writeEnumValue('userType', $this->getUserType());
    }

    /**
     * Sets the certificatePayload property value. The certificate payload of the application. This is computed by hashing the certificate information on the client. Example: `32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a50`
     * @param string|null $value Value to set for the certificatePayload property.
    */
    public function setCertificatePayload(?string $value): void {
        $this->getBackingStore()->set('certificatePayload', $value);
    }

    /**
     * Sets the companyName property value. The company name of the application. This value is set by the creator of the application. Example: `Microsoft Corporation`
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->getBackingStore()->set('companyName', $value);
    }

    /**
     * Sets the deviceId property value. The Intune deviceId. Unique identifier for the managed device. Example: `92ce5047-9553-4731-817f-9b401a999a1b`
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. The name associated with the device in the intune database. Example: `JOHNDOE-LAPTOP`.
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
     * Sets the eventDateTime property value. The date and time when the application was elevated. Example:`2014-01-01T00:00:00Z`
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the fileDescription property value. The file description of the application. This value is set by the creator of the application. Example: `Editor of multiple coding languages.`
     * @param string|null $value Value to set for the fileDescription property.
    */
    public function setFileDescription(?string $value): void {
        $this->getBackingStore()->set('fileDescription', $value);
    }

    /**
     * Sets the filePath property value. The full file path of the application including the filename and file extension. Example: `C:/Program Files/vscode.exe`
     * @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value): void {
        $this->getBackingStore()->set('filePath', $value);
    }

    /**
     * Sets the fileVersion property value. The version of the application. This value is set by the creator of the application. Example: `6.2211.1035.1000`
     * @param string|null $value Value to set for the fileVersion property.
    */
    public function setFileVersion(?string $value): void {
        $this->getBackingStore()->set('fileVersion', $value);
    }

    /**
     * Sets the hash property value. The sha256 hash of the application. Example: `32c220482c68413fbf8290e3b1e49b0a85901cfcd62ab0738760568a2a6e8a57`
     * @param string|null $value Value to set for the hash property.
    */
    public function setHash(?string $value): void {
        $this->getBackingStore()->set('hash', $value);
    }

    /**
     * Sets the internalName property value. The internal name of the application. This value is set by the creator of the application. Example: `VS code`
     * @param string|null $value Value to set for the internalName property.
    */
    public function setInternalName(?string $value): void {
        $this->getBackingStore()->set('internalName', $value);
    }

    /**
     * Sets the justification property value. The justification to elevate the application. This is an input by the user when the privilegeManagementElevationType is of type userConfirmedElevation or support approved elevation. This will be null in all other scenarios. The length is capped at 256 char, enforced on the client side. Example: `To install debug tool.`.
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the productName property value. The product name of the application. This value is set by the creator of the application. Example: `Visual Studio`
     * @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the result property value. The result of the elevation action with 0 being success, and everything else being exit code if the elevation was unsuccessful. The value will always be 0 on all unmanaged elevation. Example: `0`. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the result property.
    */
    public function setResult(?int $value): void {
        $this->getBackingStore()->set('result', $value);
    }

    /**
     * Sets the upn property value. The User Principal Name of the user who performed the elevation. Example: `john@domain.com`
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
