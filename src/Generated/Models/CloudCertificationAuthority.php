<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity that represents a collection of metadata of a cloud certification authority.
*/
class CloudCertificationAuthority extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudCertificationAuthority and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudCertificationAuthority
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudCertificationAuthority {
        return new CloudCertificationAuthority();
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
     * Gets the certificateKeySize property value. Enum of possible cloud certification authority certificate cryptography and key size combinations.
     * @return CloudCertificationAuthorityCertificateKeySize|null
    */
    public function getCertificateKeySize(): ?CloudCertificationAuthorityCertificateKeySize {
        $val = $this->getBackingStore()->get('certificateKeySize');
        if (is_null($val) || $val instanceof CloudCertificationAuthorityCertificateKeySize) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateKeySize'");
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
     * Gets the certificationAuthorityIssuerId property value. Issuer (parent) certification authority identifier. Nullable. Read-only. Supports $orderby and $select.
     * @return string|null
    */
    public function getCertificationAuthorityIssuerId(): ?string {
        $val = $this->getBackingStore()->get('certificationAuthorityIssuerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthorityIssuerId'");
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
     * Gets the certificationAuthorityStatus property value. Enum type of possible certification authority statuses. These statuses indicate whether a certification authority is currently able to issue certificates or temporarily paused or permanently revoked.
     * @return CloudCertificationAuthorityStatus|null
    */
    public function getCertificationAuthorityStatus(): ?CloudCertificationAuthorityStatus {
        $val = $this->getBackingStore()->get('certificationAuthorityStatus');
        if (is_null($val) || $val instanceof CloudCertificationAuthorityStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthorityStatus'");
    }

    /**
     * Gets the cloudCertificationAuthorityHashingAlgorithm property value. Enum type of possible certificate hashing algorithms used by the certification authority to create certificates.
     * @return CloudCertificationAuthorityHashingAlgorithm|null
    */
    public function getCloudCertificationAuthorityHashingAlgorithm(): ?CloudCertificationAuthorityHashingAlgorithm {
        $val = $this->getBackingStore()->get('cloudCertificationAuthorityHashingAlgorithm');
        if (is_null($val) || $val instanceof CloudCertificationAuthorityHashingAlgorithm) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudCertificationAuthorityHashingAlgorithm'");
    }

    /**
     * Gets the cloudCertificationAuthorityLeafCertificate property value. Required OData property to expose leaf certificate API.
     * @return array<CloudCertificationAuthorityLeafCertificate>|null
    */
    public function getCloudCertificationAuthorityLeafCertificate(): ?array {
        $val = $this->getBackingStore()->get('cloudCertificationAuthorityLeafCertificate');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudCertificationAuthorityLeafCertificate::class);
            /** @var array<CloudCertificationAuthorityLeafCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudCertificationAuthorityLeafCertificate'");
    }

    /**
     * Gets the cloudCertificationAuthorityType property value. Enum type of possible certificate authority types. This feature supports a two-tier certification authority model with a root certification authority and one or more child issuing (intermediate) certification authorities.
     * @return CloudCertificationAuthorityType|null
    */
    public function getCloudCertificationAuthorityType(): ?CloudCertificationAuthorityType {
        $val = $this->getBackingStore()->get('cloudCertificationAuthorityType');
        if (is_null($val) || $val instanceof CloudCertificationAuthorityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudCertificationAuthorityType'");
    }

    /**
     * Gets the commonName property value. The common name of the certificate subject name, which must be unique. This property is a relative distinguished name used to compose the certificate subject name. Read-only. Supports $select.
     * @return string|null
    */
    public function getCommonName(): ?string {
        $val = $this->getBackingStore()->get('commonName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'commonName'");
    }

    /**
     * Gets the countryName property value. The country name that is used to compose the subject name of a certification authority certificate in the form 'C='. Nullable. Example: US. Read-only.
     * @return string|null
    */
    public function getCountryName(): ?string {
        $val = $this->getBackingStore()->get('countryName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countryName'");
    }

    /**
     * Gets the createdDateTime property value. Creation date of this cloud certification authority entity instance. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
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
     * Gets the description property value. The certification authority description displayed in the Intune admin console. Nullable. Read/write. Returns null if not set.
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
     * Gets the displayName property value. The certification authority display name the Intune admin console. Read/write. Supports $select and $orderby.
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
     * Gets the eTag property value. ETag for optimistic concurrency control. Read/write.
     * @return string|null
    */
    public function getETag(): ?string {
        $val = $this->getBackingStore()->get('eTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eTag'");
    }

    /**
     * Gets the extendedKeyUsages property value. The certificate extended key usages, which specify the usage capabilities of the certificate. Read-only.
     * @return array<ExtendedKeyUsage>|null
    */
    public function getExtendedKeyUsages(): ?array {
        $val = $this->getBackingStore()->get('extendedKeyUsages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExtendedKeyUsage::class);
            /** @var array<ExtendedKeyUsage>|null $val */
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
            'certificateDownloadUrl' => fn(ParseNode $n) => $o->setCertificateDownloadUrl($n->getStringValue()),
            'certificateKeySize' => fn(ParseNode $n) => $o->setCertificateKeySize($n->getEnumValue(CloudCertificationAuthorityCertificateKeySize::class)),
            'certificateRevocationListUrl' => fn(ParseNode $n) => $o->setCertificateRevocationListUrl($n->getStringValue()),
            'certificateSigningRequest' => fn(ParseNode $n) => $o->setCertificateSigningRequest($n->getStringValue()),
            'certificationAuthorityIssuerId' => fn(ParseNode $n) => $o->setCertificationAuthorityIssuerId($n->getStringValue()),
            'certificationAuthorityIssuerUri' => fn(ParseNode $n) => $o->setCertificationAuthorityIssuerUri($n->getStringValue()),
            'certificationAuthorityStatus' => fn(ParseNode $n) => $o->setCertificationAuthorityStatus($n->getEnumValue(CloudCertificationAuthorityStatus::class)),
            'cloudCertificationAuthorityHashingAlgorithm' => fn(ParseNode $n) => $o->setCloudCertificationAuthorityHashingAlgorithm($n->getEnumValue(CloudCertificationAuthorityHashingAlgorithm::class)),
            'cloudCertificationAuthorityLeafCertificate' => fn(ParseNode $n) => $o->setCloudCertificationAuthorityLeafCertificate($n->getCollectionOfObjectValues([CloudCertificationAuthorityLeafCertificate::class, 'createFromDiscriminatorValue'])),
            'cloudCertificationAuthorityType' => fn(ParseNode $n) => $o->setCloudCertificationAuthorityType($n->getEnumValue(CloudCertificationAuthorityType::class)),
            'commonName' => fn(ParseNode $n) => $o->setCommonName($n->getStringValue()),
            'countryName' => fn(ParseNode $n) => $o->setCountryName($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'eTag' => fn(ParseNode $n) => $o->setETag($n->getStringValue()),
            'extendedKeyUsages' => fn(ParseNode $n) => $o->setExtendedKeyUsages($n->getCollectionOfObjectValues([ExtendedKeyUsage::class, 'createFromDiscriminatorValue'])),
            'issuerCommonName' => fn(ParseNode $n) => $o->setIssuerCommonName($n->getStringValue()),
            'keyPlatform' => fn(ParseNode $n) => $o->setKeyPlatform($n->getEnumValue(CloudCertificationAuthorityKeyPlatformType::class)),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'localityName' => fn(ParseNode $n) => $o->setLocalityName($n->getStringValue()),
            'ocspResponderUri' => fn(ParseNode $n) => $o->setOcspResponderUri($n->getStringValue()),
            'organizationName' => fn(ParseNode $n) => $o->setOrganizationName($n->getStringValue()),
            'organizationUnit' => fn(ParseNode $n) => $o->setOrganizationUnit($n->getStringValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'rootCertificateCommonName' => fn(ParseNode $n) => $o->setRootCertificateCommonName($n->getStringValue()),
            'scepServerUrl' => fn(ParseNode $n) => $o->setScepServerUrl($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'stateName' => fn(ParseNode $n) => $o->setStateName($n->getStringValue()),
            'subjectName' => fn(ParseNode $n) => $o->setSubjectName($n->getStringValue()),
            'thumbprint' => fn(ParseNode $n) => $o->setThumbprint($n->getStringValue()),
            'validityEndDateTime' => fn(ParseNode $n) => $o->setValidityEndDateTime($n->getDateTimeValue()),
            'validityPeriodInYears' => fn(ParseNode $n) => $o->setValidityPeriodInYears($n->getIntegerValue()),
            'validityStartDateTime' => fn(ParseNode $n) => $o->setValidityStartDateTime($n->getDateTimeValue()),
            'versionNumber' => fn(ParseNode $n) => $o->setVersionNumber($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the issuerCommonName property value. The issuerCommonName property
     * @return string|null
    */
    public function getIssuerCommonName(): ?string {
        $val = $this->getBackingStore()->get('issuerCommonName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuerCommonName'");
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
     * Gets the lastModifiedDateTime property value. Last modification date and time of this certification authority entity instance. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read/write.
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
     * Gets the localityName property value. The locality (town, city, etc.) name that is used to compose the subject name of a certification authority certificate in the form 'L='. This is Nullable. Example: Redmond. Read-only.
     * @return string|null
    */
    public function getLocalityName(): ?string {
        $val = $this->getBackingStore()->get('localityName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localityName'");
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
     * Gets the organizationName property value. The organization name that is used as a distinguished name in the subject name of a certification authority certificate in the form 'O='. Nullable. Example: Microsoft. Read-only.
     * @return string|null
    */
    public function getOrganizationName(): ?string {
        $val = $this->getBackingStore()->get('organizationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationName'");
    }

    /**
     * Gets the organizationUnit property value. The organization unit name that is used as a distinguished name in the subject name of a certification authority certificate in the form 'OU='. Nullable. Example: Security. Read-only.
     * @return string|null
    */
    public function getOrganizationUnit(): ?string {
        $val = $this->getBackingStore()->get('organizationUnit');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationUnit'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this entity instance. Scope tags limit access to an entity instance. Nullable. Read/write.
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
     * Gets the rootCertificateCommonName property value. The common name of the certificate subject name of the certification authority issuer. This property can be used to identify the certification authority that issued the current certification authority. For issuing certification authorities, this is the common name of the certificate subject name of the root certification authority to which it is anchored. For externally signed certification authorities, this is the common name of the certificate subject name of the signing certification authority. For root certification authorities, this is the common name of the certification authority's own certificate subject name. Read-only.
     * @return string|null
    */
    public function getRootCertificateCommonName(): ?string {
        $val = $this->getBackingStore()->get('rootCertificateCommonName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificateCommonName'");
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
     * Gets the stateName property value. The state or province name that is used to compose the subject name of a certification authority certificate in the form 'ST='. Nullable. Example: Washington. Read-only.
     * @return string|null
    */
    public function getStateName(): ?string {
        $val = $this->getBackingStore()->get('stateName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stateName'");
    }

    /**
     * Gets the subjectName property value. The subject name of the certificate. The subject is the target or intended beneficiary of the security being provided, such as a company or government entity. Read-only. Supports $orderby and $select.
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
     * Gets the validityEndDateTime property value. The end date time of the validity period of a certification authority certificate. Certificates cannot be used after this date time as they are longer valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only. Supports $orderby.
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
     * Gets the validityPeriodInYears property value. The certification authority validity period in years configured by admins.
     * @return int|null
    */
    public function getValidityPeriodInYears(): ?int {
        $val = $this->getBackingStore()->get('validityPeriodInYears');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'validityPeriodInYears'");
    }

    /**
     * Gets the validityStartDateTime property value. The start date time of the validity period of a certification authority certificate. Certificates cannot be used before this date time as they are not yet valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only. Supports $orderby.
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
     * Gets the versionNumber property value. The certification authority version, which is incremented each time the certification authority is renewed. Read-only.
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
        $writer->writeEnumValue('certificateKeySize', $this->getCertificateKeySize());
        $writer->writeStringValue('certificateRevocationListUrl', $this->getCertificateRevocationListUrl());
        $writer->writeStringValue('certificateSigningRequest', $this->getCertificateSigningRequest());
        $writer->writeStringValue('certificationAuthorityIssuerId', $this->getCertificationAuthorityIssuerId());
        $writer->writeStringValue('certificationAuthorityIssuerUri', $this->getCertificationAuthorityIssuerUri());
        $writer->writeEnumValue('certificationAuthorityStatus', $this->getCertificationAuthorityStatus());
        $writer->writeEnumValue('cloudCertificationAuthorityHashingAlgorithm', $this->getCloudCertificationAuthorityHashingAlgorithm());
        $writer->writeCollectionOfObjectValues('cloudCertificationAuthorityLeafCertificate', $this->getCloudCertificationAuthorityLeafCertificate());
        $writer->writeEnumValue('cloudCertificationAuthorityType', $this->getCloudCertificationAuthorityType());
        $writer->writeStringValue('commonName', $this->getCommonName());
        $writer->writeStringValue('countryName', $this->getCountryName());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('eTag', $this->getETag());
        $writer->writeCollectionOfObjectValues('extendedKeyUsages', $this->getExtendedKeyUsages());
        $writer->writeStringValue('issuerCommonName', $this->getIssuerCommonName());
        $writer->writeEnumValue('keyPlatform', $this->getKeyPlatform());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('localityName', $this->getLocalityName());
        $writer->writeStringValue('ocspResponderUri', $this->getOcspResponderUri());
        $writer->writeStringValue('organizationName', $this->getOrganizationName());
        $writer->writeStringValue('organizationUnit', $this->getOrganizationUnit());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeStringValue('rootCertificateCommonName', $this->getRootCertificateCommonName());
        $writer->writeStringValue('scepServerUrl', $this->getScepServerUrl());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeStringValue('stateName', $this->getStateName());
        $writer->writeStringValue('subjectName', $this->getSubjectName());
        $writer->writeStringValue('thumbprint', $this->getThumbprint());
        $writer->writeDateTimeValue('validityEndDateTime', $this->getValidityEndDateTime());
        $writer->writeIntegerValue('validityPeriodInYears', $this->getValidityPeriodInYears());
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
     * Sets the certificateKeySize property value. Enum of possible cloud certification authority certificate cryptography and key size combinations.
     * @param CloudCertificationAuthorityCertificateKeySize|null $value Value to set for the certificateKeySize property.
    */
    public function setCertificateKeySize(?CloudCertificationAuthorityCertificateKeySize $value): void {
        $this->getBackingStore()->set('certificateKeySize', $value);
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
     * Sets the certificationAuthorityIssuerId property value. Issuer (parent) certification authority identifier. Nullable. Read-only. Supports $orderby and $select.
     * @param string|null $value Value to set for the certificationAuthorityIssuerId property.
    */
    public function setCertificationAuthorityIssuerId(?string $value): void {
        $this->getBackingStore()->set('certificationAuthorityIssuerId', $value);
    }

    /**
     * Sets the certificationAuthorityIssuerUri property value. The URI of the issuing certification authority of a subordinate certification authority. Returns null if a root certification authority. Nullable. Read-only.
     * @param string|null $value Value to set for the certificationAuthorityIssuerUri property.
    */
    public function setCertificationAuthorityIssuerUri(?string $value): void {
        $this->getBackingStore()->set('certificationAuthorityIssuerUri', $value);
    }

    /**
     * Sets the certificationAuthorityStatus property value. Enum type of possible certification authority statuses. These statuses indicate whether a certification authority is currently able to issue certificates or temporarily paused or permanently revoked.
     * @param CloudCertificationAuthorityStatus|null $value Value to set for the certificationAuthorityStatus property.
    */
    public function setCertificationAuthorityStatus(?CloudCertificationAuthorityStatus $value): void {
        $this->getBackingStore()->set('certificationAuthorityStatus', $value);
    }

    /**
     * Sets the cloudCertificationAuthorityHashingAlgorithm property value. Enum type of possible certificate hashing algorithms used by the certification authority to create certificates.
     * @param CloudCertificationAuthorityHashingAlgorithm|null $value Value to set for the cloudCertificationAuthorityHashingAlgorithm property.
    */
    public function setCloudCertificationAuthorityHashingAlgorithm(?CloudCertificationAuthorityHashingAlgorithm $value): void {
        $this->getBackingStore()->set('cloudCertificationAuthorityHashingAlgorithm', $value);
    }

    /**
     * Sets the cloudCertificationAuthorityLeafCertificate property value. Required OData property to expose leaf certificate API.
     * @param array<CloudCertificationAuthorityLeafCertificate>|null $value Value to set for the cloudCertificationAuthorityLeafCertificate property.
    */
    public function setCloudCertificationAuthorityLeafCertificate(?array $value): void {
        $this->getBackingStore()->set('cloudCertificationAuthorityLeafCertificate', $value);
    }

    /**
     * Sets the cloudCertificationAuthorityType property value. Enum type of possible certificate authority types. This feature supports a two-tier certification authority model with a root certification authority and one or more child issuing (intermediate) certification authorities.
     * @param CloudCertificationAuthorityType|null $value Value to set for the cloudCertificationAuthorityType property.
    */
    public function setCloudCertificationAuthorityType(?CloudCertificationAuthorityType $value): void {
        $this->getBackingStore()->set('cloudCertificationAuthorityType', $value);
    }

    /**
     * Sets the commonName property value. The common name of the certificate subject name, which must be unique. This property is a relative distinguished name used to compose the certificate subject name. Read-only. Supports $select.
     * @param string|null $value Value to set for the commonName property.
    */
    public function setCommonName(?string $value): void {
        $this->getBackingStore()->set('commonName', $value);
    }

    /**
     * Sets the countryName property value. The country name that is used to compose the subject name of a certification authority certificate in the form 'C='. Nullable. Example: US. Read-only.
     * @param string|null $value Value to set for the countryName property.
    */
    public function setCountryName(?string $value): void {
        $this->getBackingStore()->set('countryName', $value);
    }

    /**
     * Sets the createdDateTime property value. Creation date of this cloud certification authority entity instance. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The certification authority description displayed in the Intune admin console. Nullable. Read/write. Returns null if not set.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The certification authority display name the Intune admin console. Read/write. Supports $select and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the eTag property value. ETag for optimistic concurrency control. Read/write.
     * @param string|null $value Value to set for the eTag property.
    */
    public function setETag(?string $value): void {
        $this->getBackingStore()->set('eTag', $value);
    }

    /**
     * Sets the extendedKeyUsages property value. The certificate extended key usages, which specify the usage capabilities of the certificate. Read-only.
     * @param array<ExtendedKeyUsage>|null $value Value to set for the extendedKeyUsages property.
    */
    public function setExtendedKeyUsages(?array $value): void {
        $this->getBackingStore()->set('extendedKeyUsages', $value);
    }

    /**
     * Sets the issuerCommonName property value. The issuerCommonName property
     * @param string|null $value Value to set for the issuerCommonName property.
    */
    public function setIssuerCommonName(?string $value): void {
        $this->getBackingStore()->set('issuerCommonName', $value);
    }

    /**
     * Sets the keyPlatform property value. Enum type of possible key platforms used by the certification authority.
     * @param CloudCertificationAuthorityKeyPlatformType|null $value Value to set for the keyPlatform property.
    */
    public function setKeyPlatform(?CloudCertificationAuthorityKeyPlatformType $value): void {
        $this->getBackingStore()->set('keyPlatform', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modification date and time of this certification authority entity instance. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read/write.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the localityName property value. The locality (town, city, etc.) name that is used to compose the subject name of a certification authority certificate in the form 'L='. This is Nullable. Example: Redmond. Read-only.
     * @param string|null $value Value to set for the localityName property.
    */
    public function setLocalityName(?string $value): void {
        $this->getBackingStore()->set('localityName', $value);
    }

    /**
     * Sets the ocspResponderUri property value. The Online Certificate Status Protocol (OCSP) responder URI that can be used to determine certificate status. Read-only.
     * @param string|null $value Value to set for the ocspResponderUri property.
    */
    public function setOcspResponderUri(?string $value): void {
        $this->getBackingStore()->set('ocspResponderUri', $value);
    }

    /**
     * Sets the organizationName property value. The organization name that is used as a distinguished name in the subject name of a certification authority certificate in the form 'O='. Nullable. Example: Microsoft. Read-only.
     * @param string|null $value Value to set for the organizationName property.
    */
    public function setOrganizationName(?string $value): void {
        $this->getBackingStore()->set('organizationName', $value);
    }

    /**
     * Sets the organizationUnit property value. The organization unit name that is used as a distinguished name in the subject name of a certification authority certificate in the form 'OU='. Nullable. Example: Security. Read-only.
     * @param string|null $value Value to set for the organizationUnit property.
    */
    public function setOrganizationUnit(?string $value): void {
        $this->getBackingStore()->set('organizationUnit', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this entity instance. Scope tags limit access to an entity instance. Nullable. Read/write.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the rootCertificateCommonName property value. The common name of the certificate subject name of the certification authority issuer. This property can be used to identify the certification authority that issued the current certification authority. For issuing certification authorities, this is the common name of the certificate subject name of the root certification authority to which it is anchored. For externally signed certification authorities, this is the common name of the certificate subject name of the signing certification authority. For root certification authorities, this is the common name of the certification authority's own certificate subject name. Read-only.
     * @param string|null $value Value to set for the rootCertificateCommonName property.
    */
    public function setRootCertificateCommonName(?string $value): void {
        $this->getBackingStore()->set('rootCertificateCommonName', $value);
    }

    /**
     * Sets the scepServerUrl property value. The SCEP server URL for device SCEP connections to request certificates. Read-only.
     * @param string|null $value Value to set for the scepServerUrl property.
    */
    public function setScepServerUrl(?string $value): void {
        $this->getBackingStore()->set('scepServerUrl', $value);
    }

    /**
     * Sets the serialNumber property value. The serial number used to uniquely identify a certificate with its issuing certification authority. Read-only. Supports $select.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the stateName property value. The state or province name that is used to compose the subject name of a certification authority certificate in the form 'ST='. Nullable. Example: Washington. Read-only.
     * @param string|null $value Value to set for the stateName property.
    */
    public function setStateName(?string $value): void {
        $this->getBackingStore()->set('stateName', $value);
    }

    /**
     * Sets the subjectName property value. The subject name of the certificate. The subject is the target or intended beneficiary of the security being provided, such as a company or government entity. Read-only. Supports $orderby and $select.
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
     * Sets the validityEndDateTime property value. The end date time of the validity period of a certification authority certificate. Certificates cannot be used after this date time as they are longer valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only. Supports $orderby.
     * @param DateTime|null $value Value to set for the validityEndDateTime property.
    */
    public function setValidityEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('validityEndDateTime', $value);
    }

    /**
     * Sets the validityPeriodInYears property value. The certification authority validity period in years configured by admins.
     * @param int|null $value Value to set for the validityPeriodInYears property.
    */
    public function setValidityPeriodInYears(?int $value): void {
        $this->getBackingStore()->set('validityPeriodInYears', $value);
    }

    /**
     * Sets the validityStartDateTime property value. The start date time of the validity period of a certification authority certificate. Certificates cannot be used before this date time as they are not yet valid. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Nullable. Read-only. Supports $orderby.
     * @param DateTime|null $value Value to set for the validityStartDateTime property.
    */
    public function setValidityStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('validityStartDateTime', $value);
    }

    /**
     * Sets the versionNumber property value. The certification authority version, which is incremented each time the certification authority is renewed. Read-only.
     * @param int|null $value Value to set for the versionNumber property.
    */
    public function setVersionNumber(?int $value): void {
        $this->getBackingStore()->set('versionNumber', $value);
    }

}
