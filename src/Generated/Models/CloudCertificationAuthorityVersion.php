<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity that represents version-specific properties of a cloud certification authority.
*/
class CloudCertificationAuthorityVersion extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudCertificationAuthorityVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudCertificationAuthorityVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudCertificationAuthorityVersion {
        return new CloudCertificationAuthorityVersion();
    }

    /**
     * Gets the certificateDownloadUrl property value. The URL to download the certification authority certificate. Read-only.
     * @return string|null
    */
    public function getCertificateDownloadUrl(): ?string {
        $val = $this->getBackingStore()->get('certificateDownloadUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateDownloadUrl'");
    }

    /**
     * Gets the certificateRevocationListUrl property value. The cloud certification authority's Certificate Revocation List URL that can be used to determine revocation status. Read-only.
     * @return string|null
    */
    public function getCertificateRevocationListUrl(): ?string {
        $val = $this->getBackingStore()->get('certificateRevocationListUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateRevocationListUrl'");
    }

    /**
     * Gets the certificateSigningRequest property value. The certificate signing request used to create an issuing certification authority with a root certification authority external to Microsoft Cloud PKI. The based-64 encoded certificate signing request can be downloaded through this property. After downloading the certificate signing request, it must be signed by the external root certifcation authority. Read-only.
     * @return string|null
    */
    public function getCertificateSigningRequest(): ?string {
        $val = $this->getBackingStore()->get('certificateSigningRequest');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateSigningRequest'");
    }

    /**
     * Gets the certificationAuthorityId property value. The certification authority identifier. Read-only.
     * @return string|null
    */
    public function getCertificationAuthorityId(): ?string {
        $val = $this->getBackingStore()->get('certificationAuthorityId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthorityId'");
    }

    /**
     * Gets the certificationAuthorityIssuerUri property value. The URI of the issuing certification authority of a subordinate certification authority. Returns null if a root certification authority. Nullable. Read-only.
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
     * Gets the certificationAuthorityVersionStatus property value. Enum type of possible certification authority version statuses. These statuses indicate the lifecycle state of a certification authority version, including whether it is currently active, staged for renewal, retired, or in other states.
     * @return CloudCertificationAuthorityVersionStatus|null
    */
    public function getCertificationAuthorityVersionStatus(): ?CloudCertificationAuthorityVersionStatus {
        $val = $this->getBackingStore()->get('certificationAuthorityVersionStatus');
        if (is_null($val) || $val instanceof CloudCertificationAuthorityVersionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthorityVersionStatus'");
    }

    /**
     * Gets the decommissionDateTime property value. The date and time when the certification authority version is scheduled to be decommissioned. Only applicable for staged certification authority versions. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
     * @return DateTime|null
    */
    public function getDecommissionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('decommissionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decommissionDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateDownloadUrl' => fn(ParseNode $n) => $o->setCertificateDownloadUrl($n->getStringValue()),
            'certificateRevocationListUrl' => fn(ParseNode $n) => $o->setCertificateRevocationListUrl($n->getStringValue()),
            'certificateSigningRequest' => fn(ParseNode $n) => $o->setCertificateSigningRequest($n->getStringValue()),
            'certificationAuthorityId' => fn(ParseNode $n) => $o->setCertificationAuthorityId($n->getStringValue()),
            'certificationAuthorityIssuerUri' => fn(ParseNode $n) => $o->setCertificationAuthorityIssuerUri($n->getStringValue()),
            'certificationAuthorityVersionStatus' => fn(ParseNode $n) => $o->setCertificationAuthorityVersionStatus($n->getEnumValue(CloudCertificationAuthorityVersionStatus::class)),
            'decommissionDateTime' => fn(ParseNode $n) => $o->setDecommissionDateTime($n->getDateTimeValue()),
            'keyPlatform' => fn(ParseNode $n) => $o->setKeyPlatform($n->getEnumValue(CloudCertificationAuthorityKeyPlatformType::class)),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'ocspResponderUri' => fn(ParseNode $n) => $o->setOcspResponderUri($n->getStringValue()),
            'scepServerUrl' => fn(ParseNode $n) => $o->setScepServerUrl($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'subjectName' => fn(ParseNode $n) => $o->setSubjectName($n->getStringValue()),
            'thumbprint' => fn(ParseNode $n) => $o->setThumbprint($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getObjectValue([CloudCertificationAuthorityVersionUsage::class, 'createFromDiscriminatorValue'])),
            'validityEndDateTime' => fn(ParseNode $n) => $o->setValidityEndDateTime($n->getDateTimeValue()),
            'validityStartDateTime' => fn(ParseNode $n) => $o->setValidityStartDateTime($n->getDateTimeValue()),
            'versionNumber' => fn(ParseNode $n) => $o->setVersionNumber($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the keyPlatform property value. Enum type of possible key platforms used by the certification authority.
     * @return CloudCertificationAuthorityKeyPlatformType|null
    */
    public function getKeyPlatform(): ?CloudCertificationAuthorityKeyPlatformType {
        $val = $this->getBackingStore()->get('keyPlatform');
        if (is_null($val) || $val instanceof CloudCertificationAuthorityKeyPlatformType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyPlatform'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modification date and time of this certification authority entity instance. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
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
     * Gets the scepServerUrl property value. The SCEP server URL for device SCEP connections to request certificates. Read-only.
     * @return string|null
    */
    public function getScepServerUrl(): ?string {
        $val = $this->getBackingStore()->get('scepServerUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scepServerUrl'");
    }

    /**
     * Gets the serialNumber property value. The serial number used to uniquely identify a certificate with its issuing certification authority. Read-only.
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
     * Gets the subjectName property value. The subject name of the certificate. The subject is the target or intended beneficiary of the security being provided, such as a company or government entity. Read-only.
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
     * Gets the thumbprint property value. Secure Hash Algorithm 1 digest of the certificate that can be used to identify it. Read-only.
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
     * Gets the usage property value. The usage details associated with this certification authority version, including reporting data such as the number of leaf certificates issued during the staged period. Read-only.
     * @return CloudCertificationAuthorityVersionUsage|null
    */
    public function getUsage(): ?CloudCertificationAuthorityVersionUsage {
        $val = $this->getBackingStore()->get('usage');
        if (is_null($val) || $val instanceof CloudCertificationAuthorityVersionUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usage'");
    }

    /**
     * Gets the validityEndDateTime property value. The end date time of the validity period of a certification authority certificate. Certificates cannot be used after this date time as they are longer valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
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
     * Gets the validityStartDateTime property value. The start date time of the validity period of a certification authority certificate. Certificates cannot be used before this date time as they are not yet valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
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
     * Gets the versionNumber property value. The version number assigned to this specific certification authority version entity. Read-only.
     * @return int|null
    */
    public function getVersionNumber(): ?int {
        $val = $this->getBackingStore()->get('versionNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificateDownloadUrl', $this->getCertificateDownloadUrl());
        $writer->writeStringValue('certificateRevocationListUrl', $this->getCertificateRevocationListUrl());
        $writer->writeStringValue('certificateSigningRequest', $this->getCertificateSigningRequest());
        $writer->writeStringValue('certificationAuthorityId', $this->getCertificationAuthorityId());
        $writer->writeStringValue('certificationAuthorityIssuerUri', $this->getCertificationAuthorityIssuerUri());
        $writer->writeEnumValue('certificationAuthorityVersionStatus', $this->getCertificationAuthorityVersionStatus());
        $writer->writeDateTimeValue('decommissionDateTime', $this->getDecommissionDateTime());
        $writer->writeEnumValue('keyPlatform', $this->getKeyPlatform());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('ocspResponderUri', $this->getOcspResponderUri());
        $writer->writeStringValue('scepServerUrl', $this->getScepServerUrl());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeStringValue('subjectName', $this->getSubjectName());
        $writer->writeStringValue('thumbprint', $this->getThumbprint());
        $writer->writeObjectValue('usage', $this->getUsage());
        $writer->writeDateTimeValue('validityEndDateTime', $this->getValidityEndDateTime());
        $writer->writeDateTimeValue('validityStartDateTime', $this->getValidityStartDateTime());
        $writer->writeIntegerValue('versionNumber', $this->getVersionNumber());
    }

    /**
     * Sets the certificateDownloadUrl property value. The URL to download the certification authority certificate. Read-only.
     * @param string|null $value Value to set for the certificateDownloadUrl property.
    */
    public function setCertificateDownloadUrl(?string $value): void {
        $this->getBackingStore()->set('certificateDownloadUrl', $value);
    }

    /**
     * Sets the certificateRevocationListUrl property value. The cloud certification authority's Certificate Revocation List URL that can be used to determine revocation status. Read-only.
     * @param string|null $value Value to set for the certificateRevocationListUrl property.
    */
    public function setCertificateRevocationListUrl(?string $value): void {
        $this->getBackingStore()->set('certificateRevocationListUrl', $value);
    }

    /**
     * Sets the certificateSigningRequest property value. The certificate signing request used to create an issuing certification authority with a root certification authority external to Microsoft Cloud PKI. The based-64 encoded certificate signing request can be downloaded through this property. After downloading the certificate signing request, it must be signed by the external root certifcation authority. Read-only.
     * @param string|null $value Value to set for the certificateSigningRequest property.
    */
    public function setCertificateSigningRequest(?string $value): void {
        $this->getBackingStore()->set('certificateSigningRequest', $value);
    }

    /**
     * Sets the certificationAuthorityId property value. The certification authority identifier. Read-only.
     * @param string|null $value Value to set for the certificationAuthorityId property.
    */
    public function setCertificationAuthorityId(?string $value): void {
        $this->getBackingStore()->set('certificationAuthorityId', $value);
    }

    /**
     * Sets the certificationAuthorityIssuerUri property value. The URI of the issuing certification authority of a subordinate certification authority. Returns null if a root certification authority. Nullable. Read-only.
     * @param string|null $value Value to set for the certificationAuthorityIssuerUri property.
    */
    public function setCertificationAuthorityIssuerUri(?string $value): void {
        $this->getBackingStore()->set('certificationAuthorityIssuerUri', $value);
    }

    /**
     * Sets the certificationAuthorityVersionStatus property value. Enum type of possible certification authority version statuses. These statuses indicate the lifecycle state of a certification authority version, including whether it is currently active, staged for renewal, retired, or in other states.
     * @param CloudCertificationAuthorityVersionStatus|null $value Value to set for the certificationAuthorityVersionStatus property.
    */
    public function setCertificationAuthorityVersionStatus(?CloudCertificationAuthorityVersionStatus $value): void {
        $this->getBackingStore()->set('certificationAuthorityVersionStatus', $value);
    }

    /**
     * Sets the decommissionDateTime property value. The date and time when the certification authority version is scheduled to be decommissioned. Only applicable for staged certification authority versions. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
     * @param DateTime|null $value Value to set for the decommissionDateTime property.
    */
    public function setDecommissionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('decommissionDateTime', $value);
    }

    /**
     * Sets the keyPlatform property value. Enum type of possible key platforms used by the certification authority.
     * @param CloudCertificationAuthorityKeyPlatformType|null $value Value to set for the keyPlatform property.
    */
    public function setKeyPlatform(?CloudCertificationAuthorityKeyPlatformType $value): void {
        $this->getBackingStore()->set('keyPlatform', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modification date and time of this certification authority entity instance. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the ocspResponderUri property value. The Online Certificate Status Protocol (OCSP) responder URI that can be used to determine certificate status. Read-only.
     * @param string|null $value Value to set for the ocspResponderUri property.
    */
    public function setOcspResponderUri(?string $value): void {
        $this->getBackingStore()->set('ocspResponderUri', $value);
    }

    /**
     * Sets the scepServerUrl property value. The SCEP server URL for device SCEP connections to request certificates. Read-only.
     * @param string|null $value Value to set for the scepServerUrl property.
    */
    public function setScepServerUrl(?string $value): void {
        $this->getBackingStore()->set('scepServerUrl', $value);
    }

    /**
     * Sets the serialNumber property value. The serial number used to uniquely identify a certificate with its issuing certification authority. Read-only.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the subjectName property value. The subject name of the certificate. The subject is the target or intended beneficiary of the security being provided, such as a company or government entity. Read-only.
     * @param string|null $value Value to set for the subjectName property.
    */
    public function setSubjectName(?string $value): void {
        $this->getBackingStore()->set('subjectName', $value);
    }

    /**
     * Sets the thumbprint property value. Secure Hash Algorithm 1 digest of the certificate that can be used to identify it. Read-only.
     * @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value): void {
        $this->getBackingStore()->set('thumbprint', $value);
    }

    /**
     * Sets the usage property value. The usage details associated with this certification authority version, including reporting data such as the number of leaf certificates issued during the staged period. Read-only.
     * @param CloudCertificationAuthorityVersionUsage|null $value Value to set for the usage property.
    */
    public function setUsage(?CloudCertificationAuthorityVersionUsage $value): void {
        $this->getBackingStore()->set('usage', $value);
    }

    /**
     * Sets the validityEndDateTime property value. The end date time of the validity period of a certification authority certificate. Certificates cannot be used after this date time as they are longer valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
     * @param DateTime|null $value Value to set for the validityEndDateTime property.
    */
    public function setValidityEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('validityEndDateTime', $value);
    }

    /**
     * Sets the validityStartDateTime property value. The start date time of the validity period of a certification authority certificate. Certificates cannot be used before this date time as they are not yet valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
     * @param DateTime|null $value Value to set for the validityStartDateTime property.
    */
    public function setValidityStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('validityStartDateTime', $value);
    }

    /**
     * Sets the versionNumber property value. The version number assigned to this specific certification authority version entity. Read-only.
     * @param int|null $value Value to set for the versionNumber property.
    */
    public function setVersionNumber(?int $value): void {
        $this->getBackingStore()->set('versionNumber', $value);
    }

}
