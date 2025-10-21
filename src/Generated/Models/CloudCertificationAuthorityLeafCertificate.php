<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity that represents a leaf certificate issued by a cloud certification authority.
*/
class CloudCertificationAuthorityLeafCertificate extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudCertificationAuthorityLeafCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudCertificationAuthorityLeafCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudCertificationAuthorityLeafCertificate {
        return new CloudCertificationAuthorityLeafCertificate();
    }

    /**
     * Gets the certificateStatus property value. Enum type of possible leaf certificate statuses. These statuses indicate whether certificates are active and usable or unusable if they have been revoked or expired.
     * @return CloudCertificationAuthorityLeafCertificateStatus|null
    */
    public function getCertificateStatus(): ?CloudCertificationAuthorityLeafCertificateStatus {
        $val = $this->getBackingStore()->get('certificateStatus');
        if (is_null($val) || $val instanceof CloudCertificationAuthorityLeafCertificateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateStatus'");
    }

    /**
     * Gets the certificationAuthorityIssuerUri property value. The URI of the certification authority that issued the certificate. Read-only.
     * @return string|null
    */
    public function getCertificationAuthorityIssuerUri(): ?string {
        $val = $this->getBackingStore()->get('certificationAuthorityIssuerUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthorityIssuerUri'");
    }

    /**
     * Gets the crlDistributionPointUrl property value. URL to find the relevant Certificate Revocation List for this certificate. Read-only.
     * @return string|null
    */
    public function getCrlDistributionPointUrl(): ?string {
        $val = $this->getBackingStore()->get('crlDistributionPointUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crlDistributionPointUrl'");
    }

    /**
     * Gets the deviceId property value. The unique identifier of the managed device for which the certificate was created. This ID is assigned at device enrollment time. Read-only. Supports $select.
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
     * Gets the deviceName property value. Name of the device for which the certificate was created. Read-only. Supports $select.
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
     * Gets the devicePlatform property value. The platform of the device for which the certificate was created. Possible values are: Android, AndroidForWork, iOS, MacOS, WindowsPhone81, Windows81AndLater, Windows10AndLater, AndroidWorkProfile, Unknown, AndroidAOSP, AndroidMobileApplicationManagement, iOSMobileApplicationManagement. Default value: Unknown. Read-only. Supports $select.
     * @return string|null
    */
    public function getDevicePlatform(): ?string {
        $val = $this->getBackingStore()->get('devicePlatform');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devicePlatform'");
    }

    /**
     * Gets the extendedKeyUsages property value. Certificate extensions that further define the purpose of the public key contained in a certificate. Data is formatted as a comma-separated list of object identifiers (OID). For example a possible value is '1.3.6.1.5.5.7.3.2'. Read-only. Nullable.
     * @return array<string>|null
    */
    public function getExtendedKeyUsages(): ?array {
        $val = $this->getBackingStore()->get('extendedKeyUsages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extendedKeyUsages'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateStatus' => fn(ParseNode $n) => $o->setCertificateStatus($n->getEnumValue(CloudCertificationAuthorityLeafCertificateStatus::class)),
            'certificationAuthorityIssuerUri' => fn(ParseNode $n) => $o->setCertificationAuthorityIssuerUri($n->getStringValue()),
            'crlDistributionPointUrl' => fn(ParseNode $n) => $o->setCrlDistributionPointUrl($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'devicePlatform' => fn(ParseNode $n) => $o->setDevicePlatform($n->getStringValue()),
            'extendedKeyUsages' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExtendedKeyUsages($val);
            },
            'issuerId' => fn(ParseNode $n) => $o->setIssuerId($n->getStringValue()),
            'issuerName' => fn(ParseNode $n) => $o->setIssuerName($n->getStringValue()),
            'keyUsages' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setKeyUsages($val);
            },
            'ocspResponderUri' => fn(ParseNode $n) => $o->setOcspResponderUri($n->getStringValue()),
            'revocationDateTime' => fn(ParseNode $n) => $o->setRevocationDateTime($n->getDateTimeValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'subjectName' => fn(ParseNode $n) => $o->setSubjectName($n->getStringValue()),
            'thumbprint' => fn(ParseNode $n) => $o->setThumbprint($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'validityEndDateTime' => fn(ParseNode $n) => $o->setValidityEndDateTime($n->getDateTimeValue()),
            'validityStartDateTime' => fn(ParseNode $n) => $o->setValidityStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the issuerId property value. The globally unique identifier of the certification authority that issued the leaf certificate. Read-only.
     * @return string|null
    */
    public function getIssuerId(): ?string {
        $val = $this->getBackingStore()->get('issuerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuerId'");
    }

    /**
     * Gets the issuerName property value. The name of the certification authority that issued the leaf certificate. Read-only.
     * @return string|null
    */
    public function getIssuerName(): ?string {
        $val = $this->getBackingStore()->get('issuerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuerName'");
    }

    /**
     * Gets the keyUsages property value. Certificate extensions that define the purpose of the public key contained in a certificate. For example possible values are 'Key Encipherment' and 'Digital Signature'. Read-only. Nullable.
     * @return array<string>|null
    */
    public function getKeyUsages(): ?array {
        $val = $this->getBackingStore()->get('keyUsages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyUsages'");
    }

    /**
     * Gets the ocspResponderUri property value. The Online Certificate Status Protocol (OCSP) responder URI that can be used to determine certificate status. Read-only.
     * @return string|null
    */
    public function getOcspResponderUri(): ?string {
        $val = $this->getBackingStore()->get('ocspResponderUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ocspResponderUri'");
    }

    /**
     * Gets the revocationDateTime property value. The date and time a certificate was revoked. If the certificate was not revoked, this will be null. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
     * @return DateTime|null
    */
    public function getRevocationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('revocationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'revocationDateTime'");
    }

    /**
     * Gets the serialNumber property value. The serial number used to uniquely identify a certificate with its issuing certification authority. Read-only. Supports $select.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Gets the subjectName property value. The subject name of the certificate. The subject is the target or intended beneficiary of the security being provided, such as a user or device. Read-only. Supports $select and $orderby.
     * @return string|null
    */
    public function getSubjectName(): ?string {
        $val = $this->getBackingStore()->get('subjectName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectName'");
    }

    /**
     * Gets the thumbprint property value. Secure Hash Algorithm 1 digest of the certificate that can be used to identify it. Read-only. Supports $select.
     * @return string|null
    */
    public function getThumbprint(): ?string {
        $val = $this->getBackingStore()->get('thumbprint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thumbprint'");
    }

    /**
     * Gets the userId property value. The unique identifier of the user for which the certificate was created. Null for userless devices. This is an Intune user ID. Nullable. Read-only. Supports $select.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPrincipalName property value. User principal name of the user for which the certificate was created. Null for userless devices. Nullable. Read-only. Supports $select.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the validityEndDateTime property value. The end date time of the validity period of a certificate. Certificates cannot be used after this date time as they are longer valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only. Supports $orderby.
     * @return DateTime|null
    */
    public function getValidityEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('validityEndDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'validityEndDateTime'");
    }

    /**
     * Gets the validityStartDateTime property value. The start date time of the validity period of a certificate. Certificates cannot be used before this date time as they are not yet valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only. Supports $orderby.
     * @return DateTime|null
    */
    public function getValidityStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('validityStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'validityStartDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('certificateStatus', $this->getCertificateStatus());
        $writer->writeStringValue('certificationAuthorityIssuerUri', $this->getCertificationAuthorityIssuerUri());
        $writer->writeStringValue('crlDistributionPointUrl', $this->getCrlDistributionPointUrl());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('devicePlatform', $this->getDevicePlatform());
        $writer->writeCollectionOfPrimitiveValues('extendedKeyUsages', $this->getExtendedKeyUsages());
        $writer->writeStringValue('issuerId', $this->getIssuerId());
        $writer->writeStringValue('issuerName', $this->getIssuerName());
        $writer->writeCollectionOfPrimitiveValues('keyUsages', $this->getKeyUsages());
        $writer->writeStringValue('ocspResponderUri', $this->getOcspResponderUri());
        $writer->writeDateTimeValue('revocationDateTime', $this->getRevocationDateTime());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeStringValue('subjectName', $this->getSubjectName());
        $writer->writeStringValue('thumbprint', $this->getThumbprint());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeDateTimeValue('validityEndDateTime', $this->getValidityEndDateTime());
        $writer->writeDateTimeValue('validityStartDateTime', $this->getValidityStartDateTime());
    }

    /**
     * Sets the certificateStatus property value. Enum type of possible leaf certificate statuses. These statuses indicate whether certificates are active and usable or unusable if they have been revoked or expired.
     * @param CloudCertificationAuthorityLeafCertificateStatus|null $value Value to set for the certificateStatus property.
    */
    public function setCertificateStatus(?CloudCertificationAuthorityLeafCertificateStatus $value): void {
        $this->getBackingStore()->set('certificateStatus', $value);
    }

    /**
     * Sets the certificationAuthorityIssuerUri property value. The URI of the certification authority that issued the certificate. Read-only.
     * @param string|null $value Value to set for the certificationAuthorityIssuerUri property.
    */
    public function setCertificationAuthorityIssuerUri(?string $value): void {
        $this->getBackingStore()->set('certificationAuthorityIssuerUri', $value);
    }

    /**
     * Sets the crlDistributionPointUrl property value. URL to find the relevant Certificate Revocation List for this certificate. Read-only.
     * @param string|null $value Value to set for the crlDistributionPointUrl property.
    */
    public function setCrlDistributionPointUrl(?string $value): void {
        $this->getBackingStore()->set('crlDistributionPointUrl', $value);
    }

    /**
     * Sets the deviceId property value. The unique identifier of the managed device for which the certificate was created. This ID is assigned at device enrollment time. Read-only. Supports $select.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. Name of the device for which the certificate was created. Read-only. Supports $select.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the devicePlatform property value. The platform of the device for which the certificate was created. Possible values are: Android, AndroidForWork, iOS, MacOS, WindowsPhone81, Windows81AndLater, Windows10AndLater, AndroidWorkProfile, Unknown, AndroidAOSP, AndroidMobileApplicationManagement, iOSMobileApplicationManagement. Default value: Unknown. Read-only. Supports $select.
     * @param string|null $value Value to set for the devicePlatform property.
    */
    public function setDevicePlatform(?string $value): void {
        $this->getBackingStore()->set('devicePlatform', $value);
    }

    /**
     * Sets the extendedKeyUsages property value. Certificate extensions that further define the purpose of the public key contained in a certificate. Data is formatted as a comma-separated list of object identifiers (OID). For example a possible value is '1.3.6.1.5.5.7.3.2'. Read-only. Nullable.
     * @param array<string>|null $value Value to set for the extendedKeyUsages property.
    */
    public function setExtendedKeyUsages(?array $value): void {
        $this->getBackingStore()->set('extendedKeyUsages', $value);
    }

    /**
     * Sets the issuerId property value. The globally unique identifier of the certification authority that issued the leaf certificate. Read-only.
     * @param string|null $value Value to set for the issuerId property.
    */
    public function setIssuerId(?string $value): void {
        $this->getBackingStore()->set('issuerId', $value);
    }

    /**
     * Sets the issuerName property value. The name of the certification authority that issued the leaf certificate. Read-only.
     * @param string|null $value Value to set for the issuerName property.
    */
    public function setIssuerName(?string $value): void {
        $this->getBackingStore()->set('issuerName', $value);
    }

    /**
     * Sets the keyUsages property value. Certificate extensions that define the purpose of the public key contained in a certificate. For example possible values are 'Key Encipherment' and 'Digital Signature'. Read-only. Nullable.
     * @param array<string>|null $value Value to set for the keyUsages property.
    */
    public function setKeyUsages(?array $value): void {
        $this->getBackingStore()->set('keyUsages', $value);
    }

    /**
     * Sets the ocspResponderUri property value. The Online Certificate Status Protocol (OCSP) responder URI that can be used to determine certificate status. Read-only.
     * @param string|null $value Value to set for the ocspResponderUri property.
    */
    public function setOcspResponderUri(?string $value): void {
        $this->getBackingStore()->set('ocspResponderUri', $value);
    }

    /**
     * Sets the revocationDateTime property value. The date and time a certificate was revoked. If the certificate was not revoked, this will be null. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
     * @param DateTime|null $value Value to set for the revocationDateTime property.
    */
    public function setRevocationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('revocationDateTime', $value);
    }

    /**
     * Sets the serialNumber property value. The serial number used to uniquely identify a certificate with its issuing certification authority. Read-only. Supports $select.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the subjectName property value. The subject name of the certificate. The subject is the target or intended beneficiary of the security being provided, such as a user or device. Read-only. Supports $select and $orderby.
     * @param string|null $value Value to set for the subjectName property.
    */
    public function setSubjectName(?string $value): void {
        $this->getBackingStore()->set('subjectName', $value);
    }

    /**
     * Sets the thumbprint property value. Secure Hash Algorithm 1 digest of the certificate that can be used to identify it. Read-only. Supports $select.
     * @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value): void {
        $this->getBackingStore()->set('thumbprint', $value);
    }

    /**
     * Sets the userId property value. The unique identifier of the user for which the certificate was created. Null for userless devices. This is an Intune user ID. Nullable. Read-only. Supports $select.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principal name of the user for which the certificate was created. Null for userless devices. Nullable. Read-only. Supports $select.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the validityEndDateTime property value. The end date time of the validity period of a certificate. Certificates cannot be used after this date time as they are longer valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only. Supports $orderby.
     * @param DateTime|null $value Value to set for the validityEndDateTime property.
    */
    public function setValidityEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('validityEndDateTime', $value);
    }

    /**
     * Sets the validityStartDateTime property value. The start date time of the validity period of a certificate. Certificates cannot be used before this date time as they are not yet valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only. Supports $orderby.
     * @param DateTime|null $value Value to set for the validityStartDateTime property.
    */
    public function setValidityStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('validityStartDateTime', $value);
    }

}
