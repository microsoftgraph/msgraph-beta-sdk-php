<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Enrollment Profile used to enroll Android Enterprise devices using Google's Cloud Management.
*/
class AndroidDeviceOwnerEnrollmentProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new androidDeviceOwnerEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerEnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerEnrollmentProfile {
        return new AndroidDeviceOwnerEnrollmentProfile();
    }

    /**
     * Gets the accountId property value. Tenant GUID the enrollment profile belongs to.
     * @return string|null
    */
    public function getAccountId(): ?string {
        $val = $this->getBackingStore()->get('accountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountId'");
    }

    /**
     * Gets the configureWifi property value. Boolean that indicates that the Wi-Fi network should be configured during device provisioning. When set to TRUE, device provisioning will use Wi-Fi related properties to automatically connect to Wi-Fi networks. When set to FALSE or undefined, other Wi-Fi related properties will be ignored. Default value is TRUE. Returned by default.
     * @return bool|null
    */
    public function getConfigureWifi(): ?bool {
        $val = $this->getBackingStore()->get('configureWifi');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configureWifi'");
    }

    /**
     * Gets the createdDateTime property value. Date time the enrollment profile was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. Description for the enrollment profile.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Display name for the enrollment profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the enrolledDeviceCount property value. Total number of Android devices that have enrolled using this enrollment profile.
     * @return int|null
    */
    public function getEnrolledDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('enrolledDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrolledDeviceCount'");
    }

    /**
     * Gets the enrollmentMode property value. The enrollment mode for an enrollment profile.
     * @return AndroidDeviceOwnerEnrollmentMode|null
    */
    public function getEnrollmentMode(): ?AndroidDeviceOwnerEnrollmentMode {
        $val = $this->getBackingStore()->get('enrollmentMode');
        if (is_null($val) || $val instanceof AndroidDeviceOwnerEnrollmentMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentMode'");
    }

    /**
     * Gets the enrollmentTokenType property value. The enrollment token type for an enrollment profile.
     * @return AndroidDeviceOwnerEnrollmentTokenType|null
    */
    public function getEnrollmentTokenType(): ?AndroidDeviceOwnerEnrollmentTokenType {
        $val = $this->getBackingStore()->get('enrollmentTokenType');
        if (is_null($val) || $val instanceof AndroidDeviceOwnerEnrollmentTokenType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentTokenType'");
    }

    /**
     * Gets the enrollmentTokenUsageCount property value. Total number of AOSP devices that have enrolled using the current token.
     * @return int|null
    */
    public function getEnrollmentTokenUsageCount(): ?int {
        $val = $this->getBackingStore()->get('enrollmentTokenUsageCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentTokenUsageCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'configureWifi' => fn(ParseNode $n) => $o->setConfigureWifi($n->getBooleanValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enrolledDeviceCount' => fn(ParseNode $n) => $o->setEnrolledDeviceCount($n->getIntegerValue()),
            'enrollmentMode' => fn(ParseNode $n) => $o->setEnrollmentMode($n->getEnumValue(AndroidDeviceOwnerEnrollmentMode::class)),
            'enrollmentTokenType' => fn(ParseNode $n) => $o->setEnrollmentTokenType($n->getEnumValue(AndroidDeviceOwnerEnrollmentTokenType::class)),
            'enrollmentTokenUsageCount' => fn(ParseNode $n) => $o->setEnrollmentTokenUsageCount($n->getIntegerValue()),
            'isTeamsDeviceProfile' => fn(ParseNode $n) => $o->setIsTeamsDeviceProfile($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'qrCodeContent' => fn(ParseNode $n) => $o->setQrCodeContent($n->getStringValue()),
            'qrCodeImage' => fn(ParseNode $n) => $o->setQrCodeImage($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'tokenCreationDateTime' => fn(ParseNode $n) => $o->setTokenCreationDateTime($n->getDateTimeValue()),
            'tokenExpirationDateTime' => fn(ParseNode $n) => $o->setTokenExpirationDateTime($n->getDateTimeValue()),
            'tokenValue' => fn(ParseNode $n) => $o->setTokenValue($n->getStringValue()),
            'wifiHidden' => fn(ParseNode $n) => $o->setWifiHidden($n->getBooleanValue()),
            'wifiPassword' => fn(ParseNode $n) => $o->setWifiPassword($n->getStringValue()),
            'wifiSecurityType' => fn(ParseNode $n) => $o->setWifiSecurityType($n->getEnumValue(AospWifiSecurityType::class)),
            'wifiSsid' => fn(ParseNode $n) => $o->setWifiSsid($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isTeamsDeviceProfile property value. Boolean indicating if this profile is an Android AOSP for Teams device profile.
     * @return bool|null
    */
    public function getIsTeamsDeviceProfile(): ?bool {
        $val = $this->getBackingStore()->get('isTeamsDeviceProfile');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTeamsDeviceProfile'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date time the enrollment profile was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
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
     * Gets the qrCodeContent property value. String used to generate a QR code for the token.
     * @return string|null
    */
    public function getQrCodeContent(): ?string {
        $val = $this->getBackingStore()->get('qrCodeContent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qrCodeContent'");
    }

    /**
     * Gets the qrCodeImage property value. String used to generate a QR code for the token.
     * @return MimeContent|null
    */
    public function getQrCodeImage(): ?MimeContent {
        $val = $this->getBackingStore()->get('qrCodeImage');
        if (is_null($val) || $val instanceof MimeContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qrCodeImage'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the tokenCreationDateTime property value. Date time the most recently created token was created.
     * @return DateTime|null
    */
    public function getTokenCreationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('tokenCreationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenCreationDateTime'");
    }

    /**
     * Gets the tokenExpirationDateTime property value. Date time the most recently created token will expire.
     * @return DateTime|null
    */
    public function getTokenExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('tokenExpirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenExpirationDateTime'");
    }

    /**
     * Gets the tokenValue property value. Value of the most recently created token for this enrollment profile.
     * @return string|null
    */
    public function getTokenValue(): ?string {
        $val = $this->getBackingStore()->get('tokenValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenValue'");
    }

    /**
     * Gets the wifiHidden property value. Boolean that indicates if hidden wifi networks are enabled
     * @return bool|null
    */
    public function getWifiHidden(): ?bool {
        $val = $this->getBackingStore()->get('wifiHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiHidden'");
    }

    /**
     * Gets the wifiPassword property value. String that contains the wi-fi login password
     * @return string|null
    */
    public function getWifiPassword(): ?string {
        $val = $this->getBackingStore()->get('wifiPassword');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiPassword'");
    }

    /**
     * Gets the wifiSecurityType property value. This enum represents Wi-Fi Security Types for Android Device Owner AOSP Scenarios.
     * @return AospWifiSecurityType|null
    */
    public function getWifiSecurityType(): ?AospWifiSecurityType {
        $val = $this->getBackingStore()->get('wifiSecurityType');
        if (is_null($val) || $val instanceof AospWifiSecurityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiSecurityType'");
    }

    /**
     * Gets the wifiSsid property value. String that contains the wi-fi login ssid
     * @return string|null
    */
    public function getWifiSsid(): ?string {
        $val = $this->getBackingStore()->get('wifiSsid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiSsid'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeBooleanValue('configureWifi', $this->getConfigureWifi());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('enrolledDeviceCount', $this->getEnrolledDeviceCount());
        $writer->writeEnumValue('enrollmentMode', $this->getEnrollmentMode());
        $writer->writeEnumValue('enrollmentTokenType', $this->getEnrollmentTokenType());
        $writer->writeIntegerValue('enrollmentTokenUsageCount', $this->getEnrollmentTokenUsageCount());
        $writer->writeBooleanValue('isTeamsDeviceProfile', $this->getIsTeamsDeviceProfile());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('qrCodeContent', $this->getQrCodeContent());
        $writer->writeObjectValue('qrCodeImage', $this->getQrCodeImage());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeDateTimeValue('tokenCreationDateTime', $this->getTokenCreationDateTime());
        $writer->writeDateTimeValue('tokenExpirationDateTime', $this->getTokenExpirationDateTime());
        $writer->writeStringValue('tokenValue', $this->getTokenValue());
        $writer->writeBooleanValue('wifiHidden', $this->getWifiHidden());
        $writer->writeStringValue('wifiPassword', $this->getWifiPassword());
        $writer->writeEnumValue('wifiSecurityType', $this->getWifiSecurityType());
        $writer->writeStringValue('wifiSsid', $this->getWifiSsid());
    }

    /**
     * Sets the accountId property value. Tenant GUID the enrollment profile belongs to.
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->getBackingStore()->set('accountId', $value);
    }

    /**
     * Sets the configureWifi property value. Boolean that indicates that the Wi-Fi network should be configured during device provisioning. When set to TRUE, device provisioning will use Wi-Fi related properties to automatically connect to Wi-Fi networks. When set to FALSE or undefined, other Wi-Fi related properties will be ignored. Default value is TRUE. Returned by default.
     * @param bool|null $value Value to set for the configureWifi property.
    */
    public function setConfigureWifi(?bool $value): void {
        $this->getBackingStore()->set('configureWifi', $value);
    }

    /**
     * Sets the createdDateTime property value. Date time the enrollment profile was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description for the enrollment profile.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name for the enrollment profile.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enrolledDeviceCount property value. Total number of Android devices that have enrolled using this enrollment profile.
     * @param int|null $value Value to set for the enrolledDeviceCount property.
    */
    public function setEnrolledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('enrolledDeviceCount', $value);
    }

    /**
     * Sets the enrollmentMode property value. The enrollment mode for an enrollment profile.
     * @param AndroidDeviceOwnerEnrollmentMode|null $value Value to set for the enrollmentMode property.
    */
    public function setEnrollmentMode(?AndroidDeviceOwnerEnrollmentMode $value): void {
        $this->getBackingStore()->set('enrollmentMode', $value);
    }

    /**
     * Sets the enrollmentTokenType property value. The enrollment token type for an enrollment profile.
     * @param AndroidDeviceOwnerEnrollmentTokenType|null $value Value to set for the enrollmentTokenType property.
    */
    public function setEnrollmentTokenType(?AndroidDeviceOwnerEnrollmentTokenType $value): void {
        $this->getBackingStore()->set('enrollmentTokenType', $value);
    }

    /**
     * Sets the enrollmentTokenUsageCount property value. Total number of AOSP devices that have enrolled using the current token.
     * @param int|null $value Value to set for the enrollmentTokenUsageCount property.
    */
    public function setEnrollmentTokenUsageCount(?int $value): void {
        $this->getBackingStore()->set('enrollmentTokenUsageCount', $value);
    }

    /**
     * Sets the isTeamsDeviceProfile property value. Boolean indicating if this profile is an Android AOSP for Teams device profile.
     * @param bool|null $value Value to set for the isTeamsDeviceProfile property.
    */
    public function setIsTeamsDeviceProfile(?bool $value): void {
        $this->getBackingStore()->set('isTeamsDeviceProfile', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date time the enrollment profile was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the qrCodeContent property value. String used to generate a QR code for the token.
     * @param string|null $value Value to set for the qrCodeContent property.
    */
    public function setQrCodeContent(?string $value): void {
        $this->getBackingStore()->set('qrCodeContent', $value);
    }

    /**
     * Sets the qrCodeImage property value. String used to generate a QR code for the token.
     * @param MimeContent|null $value Value to set for the qrCodeImage property.
    */
    public function setQrCodeImage(?MimeContent $value): void {
        $this->getBackingStore()->set('qrCodeImage', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the tokenCreationDateTime property value. Date time the most recently created token was created.
     * @param DateTime|null $value Value to set for the tokenCreationDateTime property.
    */
    public function setTokenCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('tokenCreationDateTime', $value);
    }

    /**
     * Sets the tokenExpirationDateTime property value. Date time the most recently created token will expire.
     * @param DateTime|null $value Value to set for the tokenExpirationDateTime property.
    */
    public function setTokenExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('tokenExpirationDateTime', $value);
    }

    /**
     * Sets the tokenValue property value. Value of the most recently created token for this enrollment profile.
     * @param string|null $value Value to set for the tokenValue property.
    */
    public function setTokenValue(?string $value): void {
        $this->getBackingStore()->set('tokenValue', $value);
    }

    /**
     * Sets the wifiHidden property value. Boolean that indicates if hidden wifi networks are enabled
     * @param bool|null $value Value to set for the wifiHidden property.
    */
    public function setWifiHidden(?bool $value): void {
        $this->getBackingStore()->set('wifiHidden', $value);
    }

    /**
     * Sets the wifiPassword property value. String that contains the wi-fi login password
     * @param string|null $value Value to set for the wifiPassword property.
    */
    public function setWifiPassword(?string $value): void {
        $this->getBackingStore()->set('wifiPassword', $value);
    }

    /**
     * Sets the wifiSecurityType property value. This enum represents Wi-Fi Security Types for Android Device Owner AOSP Scenarios.
     * @param AospWifiSecurityType|null $value Value to set for the wifiSecurityType property.
    */
    public function setWifiSecurityType(?AospWifiSecurityType $value): void {
        $this->getBackingStore()->set('wifiSecurityType', $value);
    }

    /**
     * Sets the wifiSsid property value. String that contains the wi-fi login ssid
     * @param string|null $value Value to set for the wifiSsid property.
    */
    public function setWifiSsid(?string $value): void {
        $this->getBackingStore()->set('wifiSsid', $value);
    }

}
