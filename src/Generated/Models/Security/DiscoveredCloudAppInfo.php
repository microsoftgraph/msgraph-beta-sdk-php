<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DiscoveredCloudAppInfo extends Entity implements Parsable 
{
    /**
     * Instantiates a new DiscoveredCloudAppInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscoveredCloudAppInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiscoveredCloudAppInfo {
        return new DiscoveredCloudAppInfo();
    }

    /**
     * Gets the csaStarLevel property value. The csaStarLevel property
     * @return AppInfoCsaStarLevel|null
    */
    public function getCsaStarLevel(): ?AppInfoCsaStarLevel {
        $val = $this->getBackingStore()->get('csaStarLevel');
        if (is_null($val) || $val instanceof AppInfoCsaStarLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'csaStarLevel'");
    }

    /**
     * Gets the dataAtRestEncryptionMethod property value. The dataAtRestEncryptionMethod property
     * @return AppInfoDataAtRestEncryptionMethod|null
    */
    public function getDataAtRestEncryptionMethod(): ?AppInfoDataAtRestEncryptionMethod {
        $val = $this->getBackingStore()->get('dataAtRestEncryptionMethod');
        if (is_null($val) || $val instanceof AppInfoDataAtRestEncryptionMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataAtRestEncryptionMethod'");
    }

    /**
     * Gets the dataCenter property value. Indicates the countries or regions in which your data center resides.
     * @return string|null
    */
    public function getDataCenter(): ?string {
        $val = $this->getBackingStore()->get('dataCenter');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataCenter'");
    }

    /**
     * Gets the dataRetentionPolicy property value. The dataRetentionPolicy property
     * @return AppInfoDataRetentionPolicy|null
    */
    public function getDataRetentionPolicy(): ?AppInfoDataRetentionPolicy {
        $val = $this->getBackingStore()->get('dataRetentionPolicy');
        if (is_null($val) || $val instanceof AppInfoDataRetentionPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataRetentionPolicy'");
    }

    /**
     * Gets the dataTypes property value. Indicates the data types that an end user can upload to the app. The possible values are: documents, mediaFiles, codingFiles, creditCards, databaseFiles, none, unknown, unknownFutureValue.
     * @return array<AppInfoUploadedDataTypes>|null
    */
    public function getDataTypes(): ?array {
        $val = $this->getBackingStore()->get('dataTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppInfoUploadedDataTypes::class);
            /** @var array<AppInfoUploadedDataTypes>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataTypes'");
    }

    /**
     * Gets the domainRegistrationDateTime property value. Indicates the date when the app domain was registered.
     * @return DateTime|null
    */
    public function getDomainRegistrationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('domainRegistrationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainRegistrationDateTime'");
    }

    /**
     * Gets the encryptionProtocol property value. The encryptionProtocol property
     * @return AppInfoEncryptionProtocol|null
    */
    public function getEncryptionProtocol(): ?AppInfoEncryptionProtocol {
        $val = $this->getBackingStore()->get('encryptionProtocol');
        if (is_null($val) || $val instanceof AppInfoEncryptionProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptionProtocol'");
    }

    /**
     * Gets the fedRampLevel property value. The fedRampLevel property
     * @return AppInfoFedRampLevel|null
    */
    public function getFedRampLevel(): ?AppInfoFedRampLevel {
        $val = $this->getBackingStore()->get('fedRampLevel');
        if (is_null($val) || $val instanceof AppInfoFedRampLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fedRampLevel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'csaStarLevel' => fn(ParseNode $n) => $o->setCsaStarLevel($n->getEnumValue(AppInfoCsaStarLevel::class)),
            'dataAtRestEncryptionMethod' => fn(ParseNode $n) => $o->setDataAtRestEncryptionMethod($n->getEnumValue(AppInfoDataAtRestEncryptionMethod::class)),
            'dataCenter' => fn(ParseNode $n) => $o->setDataCenter($n->getStringValue()),
            'dataRetentionPolicy' => fn(ParseNode $n) => $o->setDataRetentionPolicy($n->getEnumValue(AppInfoDataRetentionPolicy::class)),
            'dataTypes' => fn(ParseNode $n) => $o->setDataTypes($n->getCollectionOfEnumValues(AppInfoUploadedDataTypes::class)),
            'domainRegistrationDateTime' => fn(ParseNode $n) => $o->setDomainRegistrationDateTime($n->getDateTimeValue()),
            'encryptionProtocol' => fn(ParseNode $n) => $o->setEncryptionProtocol($n->getEnumValue(AppInfoEncryptionProtocol::class)),
            'fedRampLevel' => fn(ParseNode $n) => $o->setFedRampLevel($n->getEnumValue(AppInfoFedRampLevel::class)),
            'founded' => fn(ParseNode $n) => $o->setFounded($n->getIntegerValue()),
            'gdprReadinessStatement' => fn(ParseNode $n) => $o->setGdprReadinessStatement($n->getStringValue()),
            'headquarters' => fn(ParseNode $n) => $o->setHeadquarters($n->getStringValue()),
            'holding' => fn(ParseNode $n) => $o->setHolding($n->getEnumValue(AppInfoHolding::class)),
            'hostingCompany' => fn(ParseNode $n) => $o->setHostingCompany($n->getStringValue()),
            'isAdminAuditTrail' => fn(ParseNode $n) => $o->setIsAdminAuditTrail($n->getEnumValue(CloudAppInfoState::class)),
            'isCobitCompliant' => fn(ParseNode $n) => $o->setIsCobitCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isCoppaCompliant' => fn(ParseNode $n) => $o->setIsCoppaCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isDataAuditTrail' => fn(ParseNode $n) => $o->setIsDataAuditTrail($n->getEnumValue(CloudAppInfoState::class)),
            'isDataClassification' => fn(ParseNode $n) => $o->setIsDataClassification($n->getEnumValue(CloudAppInfoState::class)),
            'isDataOwnership' => fn(ParseNode $n) => $o->setIsDataOwnership($n->getEnumValue(CloudAppInfoState::class)),
            'isDisasterRecoveryPlan' => fn(ParseNode $n) => $o->setIsDisasterRecoveryPlan($n->getEnumValue(CloudAppInfoState::class)),
            'isDmca' => fn(ParseNode $n) => $o->setIsDmca($n->getEnumValue(CloudAppInfoState::class)),
            'isFerpaCompliant' => fn(ParseNode $n) => $o->setIsFerpaCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isFfiecCompliant' => fn(ParseNode $n) => $o->setIsFfiecCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isFileSharing' => fn(ParseNode $n) => $o->setIsFileSharing($n->getEnumValue(CloudAppInfoState::class)),
            'isFinraCompliant' => fn(ParseNode $n) => $o->setIsFinraCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isFismaCompliant' => fn(ParseNode $n) => $o->setIsFismaCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isGaapCompliant' => fn(ParseNode $n) => $o->setIsGaapCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprDataProtectionImpactAssessment' => fn(ParseNode $n) => $o->setIsGdprDataProtectionImpactAssessment($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprDataProtectionOfficer' => fn(ParseNode $n) => $o->setIsGdprDataProtectionOfficer($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprDataProtectionSecureCrossBorderDataTransfer' => fn(ParseNode $n) => $o->setIsGdprDataProtectionSecureCrossBorderDataTransfer($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprImpactAssessment' => fn(ParseNode $n) => $o->setIsGdprImpactAssessment($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprLawfulBasisForProcessing' => fn(ParseNode $n) => $o->setIsGdprLawfulBasisForProcessing($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprReportDataBreaches' => fn(ParseNode $n) => $o->setIsGdprReportDataBreaches($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprRightsRelatedToAutomatedDecisionMaking' => fn(ParseNode $n) => $o->setIsGdprRightsRelatedToAutomatedDecisionMaking($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprRightToAccess' => fn(ParseNode $n) => $o->setIsGdprRightToAccess($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprRightToBeInformed' => fn(ParseNode $n) => $o->setIsGdprRightToBeInformed($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprRightToDataPortablility' => fn(ParseNode $n) => $o->setIsGdprRightToDataPortablility($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprRightToErasure' => fn(ParseNode $n) => $o->setIsGdprRightToErasure($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprRightToObject' => fn(ParseNode $n) => $o->setIsGdprRightToObject($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprRightToRectification' => fn(ParseNode $n) => $o->setIsGdprRightToRectification($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprRightToRestrictionOfProcessing' => fn(ParseNode $n) => $o->setIsGdprRightToRestrictionOfProcessing($n->getEnumValue(CloudAppInfoState::class)),
            'isGdprSecureCrossBorderDataControl' => fn(ParseNode $n) => $o->setIsGdprSecureCrossBorderDataControl($n->getEnumValue(CloudAppInfoState::class)),
            'isGlbaCompliant' => fn(ParseNode $n) => $o->setIsGlbaCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isHipaaCompliant' => fn(ParseNode $n) => $o->setIsHipaaCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isHitrustCsfCompliant' => fn(ParseNode $n) => $o->setIsHitrustCsfCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isHttpSecurityHeadersContentSecurityPolicy' => fn(ParseNode $n) => $o->setIsHttpSecurityHeadersContentSecurityPolicy($n->getEnumValue(CloudAppInfoState::class)),
            'isHttpSecurityHeadersStrictTransportSecurity' => fn(ParseNode $n) => $o->setIsHttpSecurityHeadersStrictTransportSecurity($n->getEnumValue(CloudAppInfoState::class)),
            'isHttpSecurityHeadersXContentTypeOptions' => fn(ParseNode $n) => $o->setIsHttpSecurityHeadersXContentTypeOptions($n->getEnumValue(CloudAppInfoState::class)),
            'isHttpSecurityHeadersXFrameOptions' => fn(ParseNode $n) => $o->setIsHttpSecurityHeadersXFrameOptions($n->getEnumValue(CloudAppInfoState::class)),
            'isHttpSecurityHeadersXXssProtection' => fn(ParseNode $n) => $o->setIsHttpSecurityHeadersXXssProtection($n->getEnumValue(CloudAppInfoState::class)),
            'isIpAddressRestriction' => fn(ParseNode $n) => $o->setIsIpAddressRestriction($n->getEnumValue(CloudAppInfoState::class)),
            'isIsae3402Compliant' => fn(ParseNode $n) => $o->setIsIsae3402Compliant($n->getEnumValue(CloudAppInfoState::class)),
            'isIso27001Compliant' => fn(ParseNode $n) => $o->setIsIso27001Compliant($n->getEnumValue(CloudAppInfoState::class)),
            'isIso27017Compliant' => fn(ParseNode $n) => $o->setIsIso27017Compliant($n->getEnumValue(CloudAppInfoState::class)),
            'isIso27018Compliant' => fn(ParseNode $n) => $o->setIsIso27018Compliant($n->getEnumValue(CloudAppInfoState::class)),
            'isItarCompliant' => fn(ParseNode $n) => $o->setIsItarCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isMultiFactorAuthentication' => fn(ParseNode $n) => $o->setIsMultiFactorAuthentication($n->getEnumValue(CloudAppInfoState::class)),
            'isPasswordPolicy' => fn(ParseNode $n) => $o->setIsPasswordPolicy($n->getEnumValue(CloudAppInfoState::class)),
            'isPasswordPolicyChangePasswordPeriod' => fn(ParseNode $n) => $o->setIsPasswordPolicyChangePasswordPeriod($n->getEnumValue(CloudAppInfoState::class)),
            'isPasswordPolicyCharacterCombination' => fn(ParseNode $n) => $o->setIsPasswordPolicyCharacterCombination($n->getEnumValue(CloudAppInfoState::class)),
            'isPasswordPolicyPasswordHistoryAndReuse' => fn(ParseNode $n) => $o->setIsPasswordPolicyPasswordHistoryAndReuse($n->getEnumValue(CloudAppInfoState::class)),
            'isPasswordPolicyPasswordLengthLimit' => fn(ParseNode $n) => $o->setIsPasswordPolicyPasswordLengthLimit($n->getEnumValue(CloudAppInfoState::class)),
            'isPasswordPolicyPersonalInformationUse' => fn(ParseNode $n) => $o->setIsPasswordPolicyPersonalInformationUse($n->getEnumValue(CloudAppInfoState::class)),
            'isPenetrationTesting' => fn(ParseNode $n) => $o->setIsPenetrationTesting($n->getEnumValue(CloudAppInfoState::class)),
            'isPrivacyShieldCompliant' => fn(ParseNode $n) => $o->setIsPrivacyShieldCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isRememberPassword' => fn(ParseNode $n) => $o->setIsRememberPassword($n->getEnumValue(CloudAppInfoState::class)),
            'isRequiresUserAuthentication' => fn(ParseNode $n) => $o->setIsRequiresUserAuthentication($n->getEnumValue(CloudAppInfoState::class)),
            'isSoc1Compliant' => fn(ParseNode $n) => $o->setIsSoc1Compliant($n->getEnumValue(CloudAppInfoState::class)),
            'isSoc2Compliant' => fn(ParseNode $n) => $o->setIsSoc2Compliant($n->getEnumValue(CloudAppInfoState::class)),
            'isSoc3Compliant' => fn(ParseNode $n) => $o->setIsSoc3Compliant($n->getEnumValue(CloudAppInfoState::class)),
            'isSoxCompliant' => fn(ParseNode $n) => $o->setIsSoxCompliant($n->getEnumValue(CloudAppInfoState::class)),
            'isSp80053Compliant' => fn(ParseNode $n) => $o->setIsSp80053Compliant($n->getEnumValue(CloudAppInfoState::class)),
            'isSsae16Compliant' => fn(ParseNode $n) => $o->setIsSsae16Compliant($n->getEnumValue(CloudAppInfoState::class)),
            'isSupportsSaml' => fn(ParseNode $n) => $o->setIsSupportsSaml($n->getEnumValue(CloudAppInfoState::class)),
            'isTrustedCertificate' => fn(ParseNode $n) => $o->setIsTrustedCertificate($n->getEnumValue(CloudAppInfoState::class)),
            'isUserAuditTrail' => fn(ParseNode $n) => $o->setIsUserAuditTrail($n->getEnumValue(CloudAppInfoState::class)),
            'isUserCanUploadData' => fn(ParseNode $n) => $o->setIsUserCanUploadData($n->getEnumValue(CloudAppInfoState::class)),
            'isUserRolesSupport' => fn(ParseNode $n) => $o->setIsUserRolesSupport($n->getEnumValue(CloudAppInfoState::class)),
            'isValidCertificateName' => fn(ParseNode $n) => $o->setIsValidCertificateName($n->getEnumValue(CloudAppInfoState::class)),
            'latestBreachDateTime' => fn(ParseNode $n) => $o->setLatestBreachDateTime($n->getDateTimeValue()),
            'logonUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLogonUrls($val);
            },
            'pciDssVersion' => fn(ParseNode $n) => $o->setPciDssVersion($n->getEnumValue(AppInfoPciDssVersion::class)),
            'vendor' => fn(ParseNode $n) => $o->setVendor($n->getStringValue()),
        ]);
    }

    /**
     * Gets the founded property value. Indicates the year that the specific app vendor was established.
     * @return int|null
    */
    public function getFounded(): ?int {
        $val = $this->getBackingStore()->get('founded');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'founded'");
    }

    /**
     * Gets the gdprReadinessStatement property value. Indicates the GDPR readiness of the app in relation to policies app provides to safeguard personal user data.
     * @return string|null
    */
    public function getGdprReadinessStatement(): ?string {
        $val = $this->getBackingStore()->get('gdprReadinessStatement');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gdprReadinessStatement'");
    }

    /**
     * Gets the headquarters property value. Indicates the location of the headquarters of the app.
     * @return string|null
    */
    public function getHeadquarters(): ?string {
        $val = $this->getBackingStore()->get('headquarters');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'headquarters'");
    }

    /**
     * Gets the holding property value. The holding property
     * @return AppInfoHolding|null
    */
    public function getHolding(): ?AppInfoHolding {
        $val = $this->getBackingStore()->get('holding');
        if (is_null($val) || $val instanceof AppInfoHolding) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'holding'");
    }

    /**
     * Gets the hostingCompany property value. Indicates the company name that provides hosting services for the app.
     * @return string|null
    */
    public function getHostingCompany(): ?string {
        $val = $this->getBackingStore()->get('hostingCompany');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostingCompany'");
    }

    /**
     * Gets the isAdminAuditTrail property value. The isAdminAuditTrail property
     * @return CloudAppInfoState|null
    */
    public function getIsAdminAuditTrail(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isAdminAuditTrail');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAdminAuditTrail'");
    }

    /**
     * Gets the isCobitCompliant property value. The isCobitCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsCobitCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isCobitCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCobitCompliant'");
    }

    /**
     * Gets the isCoppaCompliant property value. The isCoppaCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsCoppaCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isCoppaCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCoppaCompliant'");
    }

    /**
     * Gets the isDataAuditTrail property value. The isDataAuditTrail property
     * @return CloudAppInfoState|null
    */
    public function getIsDataAuditTrail(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isDataAuditTrail');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDataAuditTrail'");
    }

    /**
     * Gets the isDataClassification property value. The isDataClassification property
     * @return CloudAppInfoState|null
    */
    public function getIsDataClassification(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isDataClassification');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDataClassification'");
    }

    /**
     * Gets the isDataOwnership property value. The isDataOwnership property
     * @return CloudAppInfoState|null
    */
    public function getIsDataOwnership(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isDataOwnership');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDataOwnership'");
    }

    /**
     * Gets the isDisasterRecoveryPlan property value. The isDisasterRecoveryPlan property
     * @return CloudAppInfoState|null
    */
    public function getIsDisasterRecoveryPlan(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isDisasterRecoveryPlan');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDisasterRecoveryPlan'");
    }

    /**
     * Gets the isDmca property value. The isDmca property
     * @return CloudAppInfoState|null
    */
    public function getIsDmca(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isDmca');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDmca'");
    }

    /**
     * Gets the isFerpaCompliant property value. The isFerpaCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsFerpaCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isFerpaCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFerpaCompliant'");
    }

    /**
     * Gets the isFfiecCompliant property value. The isFfiecCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsFfiecCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isFfiecCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFfiecCompliant'");
    }

    /**
     * Gets the isFileSharing property value. The isFileSharing property
     * @return CloudAppInfoState|null
    */
    public function getIsFileSharing(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isFileSharing');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFileSharing'");
    }

    /**
     * Gets the isFinraCompliant property value. The isFinraCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsFinraCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isFinraCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFinraCompliant'");
    }

    /**
     * Gets the isFismaCompliant property value. The isFismaCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsFismaCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isFismaCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFismaCompliant'");
    }

    /**
     * Gets the isGaapCompliant property value. The isGaapCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsGaapCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGaapCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGaapCompliant'");
    }

    /**
     * Gets the isGdprDataProtectionImpactAssessment property value. The isGdprDataProtectionImpactAssessment property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprDataProtectionImpactAssessment(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprDataProtectionImpactAssessment');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprDataProtectionImpactAssessment'");
    }

    /**
     * Gets the isGdprDataProtectionOfficer property value. The isGdprDataProtectionOfficer property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprDataProtectionOfficer(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprDataProtectionOfficer');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprDataProtectionOfficer'");
    }

    /**
     * Gets the isGdprDataProtectionSecureCrossBorderDataTransfer property value. The isGdprDataProtectionSecureCrossBorderDataTransfer property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprDataProtectionSecureCrossBorderDataTransfer(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprDataProtectionSecureCrossBorderDataTransfer');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprDataProtectionSecureCrossBorderDataTransfer'");
    }

    /**
     * Gets the isGdprImpactAssessment property value. The isGdprImpactAssessment property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprImpactAssessment(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprImpactAssessment');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprImpactAssessment'");
    }

    /**
     * Gets the isGdprLawfulBasisForProcessing property value. The isGdprLawfulBasisForProcessing property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprLawfulBasisForProcessing(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprLawfulBasisForProcessing');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprLawfulBasisForProcessing'");
    }

    /**
     * Gets the isGdprReportDataBreaches property value. The isGdprReportDataBreaches property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprReportDataBreaches(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprReportDataBreaches');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprReportDataBreaches'");
    }

    /**
     * Gets the isGdprRightsRelatedToAutomatedDecisionMaking property value. The isGdprRightsRelatedToAutomatedDecisionMaking property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprRightsRelatedToAutomatedDecisionMaking(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprRightsRelatedToAutomatedDecisionMaking');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprRightsRelatedToAutomatedDecisionMaking'");
    }

    /**
     * Gets the isGdprRightToAccess property value. The isGdprRightToAccess property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprRightToAccess(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprRightToAccess');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprRightToAccess'");
    }

    /**
     * Gets the isGdprRightToBeInformed property value. The isGdprRightToBeInformed property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprRightToBeInformed(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprRightToBeInformed');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprRightToBeInformed'");
    }

    /**
     * Gets the isGdprRightToDataPortablility property value. The isGdprRightToDataPortablility property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprRightToDataPortablility(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprRightToDataPortablility');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprRightToDataPortablility'");
    }

    /**
     * Gets the isGdprRightToErasure property value. The isGdprRightToErasure property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprRightToErasure(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprRightToErasure');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprRightToErasure'");
    }

    /**
     * Gets the isGdprRightToObject property value. The isGdprRightToObject property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprRightToObject(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprRightToObject');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprRightToObject'");
    }

    /**
     * Gets the isGdprRightToRectification property value. The isGdprRightToRectification property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprRightToRectification(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprRightToRectification');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprRightToRectification'");
    }

    /**
     * Gets the isGdprRightToRestrictionOfProcessing property value. The isGdprRightToRestrictionOfProcessing property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprRightToRestrictionOfProcessing(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprRightToRestrictionOfProcessing');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprRightToRestrictionOfProcessing'");
    }

    /**
     * Gets the isGdprSecureCrossBorderDataControl property value. The isGdprSecureCrossBorderDataControl property
     * @return CloudAppInfoState|null
    */
    public function getIsGdprSecureCrossBorderDataControl(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGdprSecureCrossBorderDataControl');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGdprSecureCrossBorderDataControl'");
    }

    /**
     * Gets the isGlbaCompliant property value. The isGlbaCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsGlbaCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isGlbaCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isGlbaCompliant'");
    }

    /**
     * Gets the isHipaaCompliant property value. The isHipaaCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsHipaaCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isHipaaCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHipaaCompliant'");
    }

    /**
     * Gets the isHitrustCsfCompliant property value. The isHitrustCsfCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsHitrustCsfCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isHitrustCsfCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHitrustCsfCompliant'");
    }

    /**
     * Gets the isHttpSecurityHeadersContentSecurityPolicy property value. The isHttpSecurityHeadersContentSecurityPolicy property
     * @return CloudAppInfoState|null
    */
    public function getIsHttpSecurityHeadersContentSecurityPolicy(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isHttpSecurityHeadersContentSecurityPolicy');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHttpSecurityHeadersContentSecurityPolicy'");
    }

    /**
     * Gets the isHttpSecurityHeadersStrictTransportSecurity property value. The isHttpSecurityHeadersStrictTransportSecurity property
     * @return CloudAppInfoState|null
    */
    public function getIsHttpSecurityHeadersStrictTransportSecurity(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isHttpSecurityHeadersStrictTransportSecurity');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHttpSecurityHeadersStrictTransportSecurity'");
    }

    /**
     * Gets the isHttpSecurityHeadersXContentTypeOptions property value. The isHttpSecurityHeadersXContentTypeOptions property
     * @return CloudAppInfoState|null
    */
    public function getIsHttpSecurityHeadersXContentTypeOptions(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isHttpSecurityHeadersXContentTypeOptions');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHttpSecurityHeadersXContentTypeOptions'");
    }

    /**
     * Gets the isHttpSecurityHeadersXFrameOptions property value. The isHttpSecurityHeadersXFrameOptions property
     * @return CloudAppInfoState|null
    */
    public function getIsHttpSecurityHeadersXFrameOptions(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isHttpSecurityHeadersXFrameOptions');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHttpSecurityHeadersXFrameOptions'");
    }

    /**
     * Gets the isHttpSecurityHeadersXXssProtection property value. The isHttpSecurityHeadersXXssProtection property
     * @return CloudAppInfoState|null
    */
    public function getIsHttpSecurityHeadersXXssProtection(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isHttpSecurityHeadersXXssProtection');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHttpSecurityHeadersXXssProtection'");
    }

    /**
     * Gets the isIpAddressRestriction property value. The isIpAddressRestriction property
     * @return CloudAppInfoState|null
    */
    public function getIsIpAddressRestriction(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isIpAddressRestriction');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isIpAddressRestriction'");
    }

    /**
     * Gets the isIsae3402Compliant property value. The isIsae3402Compliant property
     * @return CloudAppInfoState|null
    */
    public function getIsIsae3402Compliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isIsae3402Compliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isIsae3402Compliant'");
    }

    /**
     * Gets the isIso27001Compliant property value. The isIso27001Compliant property
     * @return CloudAppInfoState|null
    */
    public function getIsIso27001Compliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isIso27001Compliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isIso27001Compliant'");
    }

    /**
     * Gets the isIso27017Compliant property value. The isIso27017Compliant property
     * @return CloudAppInfoState|null
    */
    public function getIsIso27017Compliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isIso27017Compliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isIso27017Compliant'");
    }

    /**
     * Gets the isIso27018Compliant property value. The isIso27018Compliant property
     * @return CloudAppInfoState|null
    */
    public function getIsIso27018Compliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isIso27018Compliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isIso27018Compliant'");
    }

    /**
     * Gets the isItarCompliant property value. The isItarCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsItarCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isItarCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isItarCompliant'");
    }

    /**
     * Gets the isMultiFactorAuthentication property value. The isMultiFactorAuthentication property
     * @return CloudAppInfoState|null
    */
    public function getIsMultiFactorAuthentication(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isMultiFactorAuthentication');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMultiFactorAuthentication'");
    }

    /**
     * Gets the isPasswordPolicy property value. The isPasswordPolicy property
     * @return CloudAppInfoState|null
    */
    public function getIsPasswordPolicy(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isPasswordPolicy');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPasswordPolicy'");
    }

    /**
     * Gets the isPasswordPolicyChangePasswordPeriod property value. The isPasswordPolicyChangePasswordPeriod property
     * @return CloudAppInfoState|null
    */
    public function getIsPasswordPolicyChangePasswordPeriod(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isPasswordPolicyChangePasswordPeriod');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPasswordPolicyChangePasswordPeriod'");
    }

    /**
     * Gets the isPasswordPolicyCharacterCombination property value. The isPasswordPolicyCharacterCombination property
     * @return CloudAppInfoState|null
    */
    public function getIsPasswordPolicyCharacterCombination(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isPasswordPolicyCharacterCombination');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPasswordPolicyCharacterCombination'");
    }

    /**
     * Gets the isPasswordPolicyPasswordHistoryAndReuse property value. The isPasswordPolicyPasswordHistoryAndReuse property
     * @return CloudAppInfoState|null
    */
    public function getIsPasswordPolicyPasswordHistoryAndReuse(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isPasswordPolicyPasswordHistoryAndReuse');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPasswordPolicyPasswordHistoryAndReuse'");
    }

    /**
     * Gets the isPasswordPolicyPasswordLengthLimit property value. The isPasswordPolicyPasswordLengthLimit property
     * @return CloudAppInfoState|null
    */
    public function getIsPasswordPolicyPasswordLengthLimit(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isPasswordPolicyPasswordLengthLimit');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPasswordPolicyPasswordLengthLimit'");
    }

    /**
     * Gets the isPasswordPolicyPersonalInformationUse property value. The isPasswordPolicyPersonalInformationUse property
     * @return CloudAppInfoState|null
    */
    public function getIsPasswordPolicyPersonalInformationUse(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isPasswordPolicyPersonalInformationUse');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPasswordPolicyPersonalInformationUse'");
    }

    /**
     * Gets the isPenetrationTesting property value. The isPenetrationTesting property
     * @return CloudAppInfoState|null
    */
    public function getIsPenetrationTesting(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isPenetrationTesting');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPenetrationTesting'");
    }

    /**
     * Gets the isPrivacyShieldCompliant property value. The isPrivacyShieldCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsPrivacyShieldCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isPrivacyShieldCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPrivacyShieldCompliant'");
    }

    /**
     * Gets the isRememberPassword property value. The isRememberPassword property
     * @return CloudAppInfoState|null
    */
    public function getIsRememberPassword(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isRememberPassword');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRememberPassword'");
    }

    /**
     * Gets the isRequiresUserAuthentication property value. The isRequiresUserAuthentication property
     * @return CloudAppInfoState|null
    */
    public function getIsRequiresUserAuthentication(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isRequiresUserAuthentication');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequiresUserAuthentication'");
    }

    /**
     * Gets the isSoc1Compliant property value. The isSoc1Compliant property
     * @return CloudAppInfoState|null
    */
    public function getIsSoc1Compliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isSoc1Compliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSoc1Compliant'");
    }

    /**
     * Gets the isSoc2Compliant property value. The isSoc2Compliant property
     * @return CloudAppInfoState|null
    */
    public function getIsSoc2Compliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isSoc2Compliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSoc2Compliant'");
    }

    /**
     * Gets the isSoc3Compliant property value. The isSoc3Compliant property
     * @return CloudAppInfoState|null
    */
    public function getIsSoc3Compliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isSoc3Compliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSoc3Compliant'");
    }

    /**
     * Gets the isSoxCompliant property value. The isSoxCompliant property
     * @return CloudAppInfoState|null
    */
    public function getIsSoxCompliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isSoxCompliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSoxCompliant'");
    }

    /**
     * Gets the isSp80053Compliant property value. The isSp80053Compliant property
     * @return CloudAppInfoState|null
    */
    public function getIsSp80053Compliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isSp80053Compliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSp80053Compliant'");
    }

    /**
     * Gets the isSsae16Compliant property value. The isSsae16Compliant property
     * @return CloudAppInfoState|null
    */
    public function getIsSsae16Compliant(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isSsae16Compliant');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSsae16Compliant'");
    }

    /**
     * Gets the isSupportsSaml property value. The isSupportsSaml property
     * @return CloudAppInfoState|null
    */
    public function getIsSupportsSaml(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isSupportsSaml');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSupportsSaml'");
    }

    /**
     * Gets the isTrustedCertificate property value. The isTrustedCertificate property
     * @return CloudAppInfoState|null
    */
    public function getIsTrustedCertificate(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isTrustedCertificate');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTrustedCertificate'");
    }

    /**
     * Gets the isUserAuditTrail property value. The isUserAuditTrail property
     * @return CloudAppInfoState|null
    */
    public function getIsUserAuditTrail(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isUserAuditTrail');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUserAuditTrail'");
    }

    /**
     * Gets the isUserCanUploadData property value. The isUserCanUploadData property
     * @return CloudAppInfoState|null
    */
    public function getIsUserCanUploadData(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isUserCanUploadData');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUserCanUploadData'");
    }

    /**
     * Gets the isUserRolesSupport property value. The isUserRolesSupport property
     * @return CloudAppInfoState|null
    */
    public function getIsUserRolesSupport(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isUserRolesSupport');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUserRolesSupport'");
    }

    /**
     * Gets the isValidCertificateName property value. The isValidCertificateName property
     * @return CloudAppInfoState|null
    */
    public function getIsValidCertificateName(): ?CloudAppInfoState {
        $val = $this->getBackingStore()->get('isValidCertificateName');
        if (is_null($val) || $val instanceof CloudAppInfoState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isValidCertificateName'");
    }

    /**
     * Gets the latestBreachDateTime property value. Indicates the last date of the data breach for the company.
     * @return DateTime|null
    */
    public function getLatestBreachDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('latestBreachDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latestBreachDateTime'");
    }

    /**
     * Gets the logonUrls property value. Indicates the URL that users can use to sign into the app.
     * @return array<string>|null
    */
    public function getLogonUrls(): ?array {
        $val = $this->getBackingStore()->get('logonUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logonUrls'");
    }

    /**
     * Gets the pciDssVersion property value. The pciDssVersion property
     * @return AppInfoPciDssVersion|null
    */
    public function getPciDssVersion(): ?AppInfoPciDssVersion {
        $val = $this->getBackingStore()->get('pciDssVersion');
        if (is_null($val) || $val instanceof AppInfoPciDssVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pciDssVersion'");
    }

    /**
     * Gets the vendor property value. Indicates the app vendor.
     * @return string|null
    */
    public function getVendor(): ?string {
        $val = $this->getBackingStore()->get('vendor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendor'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('csaStarLevel', $this->getCsaStarLevel());
        $writer->writeEnumValue('dataAtRestEncryptionMethod', $this->getDataAtRestEncryptionMethod());
        $writer->writeStringValue('dataCenter', $this->getDataCenter());
        $writer->writeEnumValue('dataRetentionPolicy', $this->getDataRetentionPolicy());
        $writer->writeCollectionOfEnumValues('dataTypes', $this->getDataTypes());
        $writer->writeDateTimeValue('domainRegistrationDateTime', $this->getDomainRegistrationDateTime());
        $writer->writeEnumValue('encryptionProtocol', $this->getEncryptionProtocol());
        $writer->writeEnumValue('fedRampLevel', $this->getFedRampLevel());
        $writer->writeIntegerValue('founded', $this->getFounded());
        $writer->writeStringValue('gdprReadinessStatement', $this->getGdprReadinessStatement());
        $writer->writeStringValue('headquarters', $this->getHeadquarters());
        $writer->writeEnumValue('holding', $this->getHolding());
        $writer->writeStringValue('hostingCompany', $this->getHostingCompany());
        $writer->writeEnumValue('isAdminAuditTrail', $this->getIsAdminAuditTrail());
        $writer->writeEnumValue('isCobitCompliant', $this->getIsCobitCompliant());
        $writer->writeEnumValue('isCoppaCompliant', $this->getIsCoppaCompliant());
        $writer->writeEnumValue('isDataAuditTrail', $this->getIsDataAuditTrail());
        $writer->writeEnumValue('isDataClassification', $this->getIsDataClassification());
        $writer->writeEnumValue('isDataOwnership', $this->getIsDataOwnership());
        $writer->writeEnumValue('isDisasterRecoveryPlan', $this->getIsDisasterRecoveryPlan());
        $writer->writeEnumValue('isDmca', $this->getIsDmca());
        $writer->writeEnumValue('isFerpaCompliant', $this->getIsFerpaCompliant());
        $writer->writeEnumValue('isFfiecCompliant', $this->getIsFfiecCompliant());
        $writer->writeEnumValue('isFileSharing', $this->getIsFileSharing());
        $writer->writeEnumValue('isFinraCompliant', $this->getIsFinraCompliant());
        $writer->writeEnumValue('isFismaCompliant', $this->getIsFismaCompliant());
        $writer->writeEnumValue('isGaapCompliant', $this->getIsGaapCompliant());
        $writer->writeEnumValue('isGdprDataProtectionImpactAssessment', $this->getIsGdprDataProtectionImpactAssessment());
        $writer->writeEnumValue('isGdprDataProtectionOfficer', $this->getIsGdprDataProtectionOfficer());
        $writer->writeEnumValue('isGdprDataProtectionSecureCrossBorderDataTransfer', $this->getIsGdprDataProtectionSecureCrossBorderDataTransfer());
        $writer->writeEnumValue('isGdprImpactAssessment', $this->getIsGdprImpactAssessment());
        $writer->writeEnumValue('isGdprLawfulBasisForProcessing', $this->getIsGdprLawfulBasisForProcessing());
        $writer->writeEnumValue('isGdprReportDataBreaches', $this->getIsGdprReportDataBreaches());
        $writer->writeEnumValue('isGdprRightsRelatedToAutomatedDecisionMaking', $this->getIsGdprRightsRelatedToAutomatedDecisionMaking());
        $writer->writeEnumValue('isGdprRightToAccess', $this->getIsGdprRightToAccess());
        $writer->writeEnumValue('isGdprRightToBeInformed', $this->getIsGdprRightToBeInformed());
        $writer->writeEnumValue('isGdprRightToDataPortablility', $this->getIsGdprRightToDataPortablility());
        $writer->writeEnumValue('isGdprRightToErasure', $this->getIsGdprRightToErasure());
        $writer->writeEnumValue('isGdprRightToObject', $this->getIsGdprRightToObject());
        $writer->writeEnumValue('isGdprRightToRectification', $this->getIsGdprRightToRectification());
        $writer->writeEnumValue('isGdprRightToRestrictionOfProcessing', $this->getIsGdprRightToRestrictionOfProcessing());
        $writer->writeEnumValue('isGdprSecureCrossBorderDataControl', $this->getIsGdprSecureCrossBorderDataControl());
        $writer->writeEnumValue('isGlbaCompliant', $this->getIsGlbaCompliant());
        $writer->writeEnumValue('isHipaaCompliant', $this->getIsHipaaCompliant());
        $writer->writeEnumValue('isHitrustCsfCompliant', $this->getIsHitrustCsfCompliant());
        $writer->writeEnumValue('isHttpSecurityHeadersContentSecurityPolicy', $this->getIsHttpSecurityHeadersContentSecurityPolicy());
        $writer->writeEnumValue('isHttpSecurityHeadersStrictTransportSecurity', $this->getIsHttpSecurityHeadersStrictTransportSecurity());
        $writer->writeEnumValue('isHttpSecurityHeadersXContentTypeOptions', $this->getIsHttpSecurityHeadersXContentTypeOptions());
        $writer->writeEnumValue('isHttpSecurityHeadersXFrameOptions', $this->getIsHttpSecurityHeadersXFrameOptions());
        $writer->writeEnumValue('isHttpSecurityHeadersXXssProtection', $this->getIsHttpSecurityHeadersXXssProtection());
        $writer->writeEnumValue('isIpAddressRestriction', $this->getIsIpAddressRestriction());
        $writer->writeEnumValue('isIsae3402Compliant', $this->getIsIsae3402Compliant());
        $writer->writeEnumValue('isIso27001Compliant', $this->getIsIso27001Compliant());
        $writer->writeEnumValue('isIso27017Compliant', $this->getIsIso27017Compliant());
        $writer->writeEnumValue('isIso27018Compliant', $this->getIsIso27018Compliant());
        $writer->writeEnumValue('isItarCompliant', $this->getIsItarCompliant());
        $writer->writeEnumValue('isMultiFactorAuthentication', $this->getIsMultiFactorAuthentication());
        $writer->writeEnumValue('isPasswordPolicy', $this->getIsPasswordPolicy());
        $writer->writeEnumValue('isPasswordPolicyChangePasswordPeriod', $this->getIsPasswordPolicyChangePasswordPeriod());
        $writer->writeEnumValue('isPasswordPolicyCharacterCombination', $this->getIsPasswordPolicyCharacterCombination());
        $writer->writeEnumValue('isPasswordPolicyPasswordHistoryAndReuse', $this->getIsPasswordPolicyPasswordHistoryAndReuse());
        $writer->writeEnumValue('isPasswordPolicyPasswordLengthLimit', $this->getIsPasswordPolicyPasswordLengthLimit());
        $writer->writeEnumValue('isPasswordPolicyPersonalInformationUse', $this->getIsPasswordPolicyPersonalInformationUse());
        $writer->writeEnumValue('isPenetrationTesting', $this->getIsPenetrationTesting());
        $writer->writeEnumValue('isPrivacyShieldCompliant', $this->getIsPrivacyShieldCompliant());
        $writer->writeEnumValue('isRememberPassword', $this->getIsRememberPassword());
        $writer->writeEnumValue('isRequiresUserAuthentication', $this->getIsRequiresUserAuthentication());
        $writer->writeEnumValue('isSoc1Compliant', $this->getIsSoc1Compliant());
        $writer->writeEnumValue('isSoc2Compliant', $this->getIsSoc2Compliant());
        $writer->writeEnumValue('isSoc3Compliant', $this->getIsSoc3Compliant());
        $writer->writeEnumValue('isSoxCompliant', $this->getIsSoxCompliant());
        $writer->writeEnumValue('isSp80053Compliant', $this->getIsSp80053Compliant());
        $writer->writeEnumValue('isSsae16Compliant', $this->getIsSsae16Compliant());
        $writer->writeEnumValue('isSupportsSaml', $this->getIsSupportsSaml());
        $writer->writeEnumValue('isTrustedCertificate', $this->getIsTrustedCertificate());
        $writer->writeEnumValue('isUserAuditTrail', $this->getIsUserAuditTrail());
        $writer->writeEnumValue('isUserCanUploadData', $this->getIsUserCanUploadData());
        $writer->writeEnumValue('isUserRolesSupport', $this->getIsUserRolesSupport());
        $writer->writeEnumValue('isValidCertificateName', $this->getIsValidCertificateName());
        $writer->writeDateTimeValue('latestBreachDateTime', $this->getLatestBreachDateTime());
        $writer->writeCollectionOfPrimitiveValues('logonUrls', $this->getLogonUrls());
        $writer->writeEnumValue('pciDssVersion', $this->getPciDssVersion());
        $writer->writeStringValue('vendor', $this->getVendor());
    }

    /**
     * Sets the csaStarLevel property value. The csaStarLevel property
     * @param AppInfoCsaStarLevel|null $value Value to set for the csaStarLevel property.
    */
    public function setCsaStarLevel(?AppInfoCsaStarLevel $value): void {
        $this->getBackingStore()->set('csaStarLevel', $value);
    }

    /**
     * Sets the dataAtRestEncryptionMethod property value. The dataAtRestEncryptionMethod property
     * @param AppInfoDataAtRestEncryptionMethod|null $value Value to set for the dataAtRestEncryptionMethod property.
    */
    public function setDataAtRestEncryptionMethod(?AppInfoDataAtRestEncryptionMethod $value): void {
        $this->getBackingStore()->set('dataAtRestEncryptionMethod', $value);
    }

    /**
     * Sets the dataCenter property value. Indicates the countries or regions in which your data center resides.
     * @param string|null $value Value to set for the dataCenter property.
    */
    public function setDataCenter(?string $value): void {
        $this->getBackingStore()->set('dataCenter', $value);
    }

    /**
     * Sets the dataRetentionPolicy property value. The dataRetentionPolicy property
     * @param AppInfoDataRetentionPolicy|null $value Value to set for the dataRetentionPolicy property.
    */
    public function setDataRetentionPolicy(?AppInfoDataRetentionPolicy $value): void {
        $this->getBackingStore()->set('dataRetentionPolicy', $value);
    }

    /**
     * Sets the dataTypes property value. Indicates the data types that an end user can upload to the app. The possible values are: documents, mediaFiles, codingFiles, creditCards, databaseFiles, none, unknown, unknownFutureValue.
     * @param array<AppInfoUploadedDataTypes>|null $value Value to set for the dataTypes property.
    */
    public function setDataTypes(?array $value): void {
        $this->getBackingStore()->set('dataTypes', $value);
    }

    /**
     * Sets the domainRegistrationDateTime property value. Indicates the date when the app domain was registered.
     * @param DateTime|null $value Value to set for the domainRegistrationDateTime property.
    */
    public function setDomainRegistrationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('domainRegistrationDateTime', $value);
    }

    /**
     * Sets the encryptionProtocol property value. The encryptionProtocol property
     * @param AppInfoEncryptionProtocol|null $value Value to set for the encryptionProtocol property.
    */
    public function setEncryptionProtocol(?AppInfoEncryptionProtocol $value): void {
        $this->getBackingStore()->set('encryptionProtocol', $value);
    }

    /**
     * Sets the fedRampLevel property value. The fedRampLevel property
     * @param AppInfoFedRampLevel|null $value Value to set for the fedRampLevel property.
    */
    public function setFedRampLevel(?AppInfoFedRampLevel $value): void {
        $this->getBackingStore()->set('fedRampLevel', $value);
    }

    /**
     * Sets the founded property value. Indicates the year that the specific app vendor was established.
     * @param int|null $value Value to set for the founded property.
    */
    public function setFounded(?int $value): void {
        $this->getBackingStore()->set('founded', $value);
    }

    /**
     * Sets the gdprReadinessStatement property value. Indicates the GDPR readiness of the app in relation to policies app provides to safeguard personal user data.
     * @param string|null $value Value to set for the gdprReadinessStatement property.
    */
    public function setGdprReadinessStatement(?string $value): void {
        $this->getBackingStore()->set('gdprReadinessStatement', $value);
    }

    /**
     * Sets the headquarters property value. Indicates the location of the headquarters of the app.
     * @param string|null $value Value to set for the headquarters property.
    */
    public function setHeadquarters(?string $value): void {
        $this->getBackingStore()->set('headquarters', $value);
    }

    /**
     * Sets the holding property value. The holding property
     * @param AppInfoHolding|null $value Value to set for the holding property.
    */
    public function setHolding(?AppInfoHolding $value): void {
        $this->getBackingStore()->set('holding', $value);
    }

    /**
     * Sets the hostingCompany property value. Indicates the company name that provides hosting services for the app.
     * @param string|null $value Value to set for the hostingCompany property.
    */
    public function setHostingCompany(?string $value): void {
        $this->getBackingStore()->set('hostingCompany', $value);
    }

    /**
     * Sets the isAdminAuditTrail property value. The isAdminAuditTrail property
     * @param CloudAppInfoState|null $value Value to set for the isAdminAuditTrail property.
    */
    public function setIsAdminAuditTrail(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isAdminAuditTrail', $value);
    }

    /**
     * Sets the isCobitCompliant property value. The isCobitCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isCobitCompliant property.
    */
    public function setIsCobitCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isCobitCompliant', $value);
    }

    /**
     * Sets the isCoppaCompliant property value. The isCoppaCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isCoppaCompliant property.
    */
    public function setIsCoppaCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isCoppaCompliant', $value);
    }

    /**
     * Sets the isDataAuditTrail property value. The isDataAuditTrail property
     * @param CloudAppInfoState|null $value Value to set for the isDataAuditTrail property.
    */
    public function setIsDataAuditTrail(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isDataAuditTrail', $value);
    }

    /**
     * Sets the isDataClassification property value. The isDataClassification property
     * @param CloudAppInfoState|null $value Value to set for the isDataClassification property.
    */
    public function setIsDataClassification(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isDataClassification', $value);
    }

    /**
     * Sets the isDataOwnership property value. The isDataOwnership property
     * @param CloudAppInfoState|null $value Value to set for the isDataOwnership property.
    */
    public function setIsDataOwnership(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isDataOwnership', $value);
    }

    /**
     * Sets the isDisasterRecoveryPlan property value. The isDisasterRecoveryPlan property
     * @param CloudAppInfoState|null $value Value to set for the isDisasterRecoveryPlan property.
    */
    public function setIsDisasterRecoveryPlan(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isDisasterRecoveryPlan', $value);
    }

    /**
     * Sets the isDmca property value. The isDmca property
     * @param CloudAppInfoState|null $value Value to set for the isDmca property.
    */
    public function setIsDmca(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isDmca', $value);
    }

    /**
     * Sets the isFerpaCompliant property value. The isFerpaCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isFerpaCompliant property.
    */
    public function setIsFerpaCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isFerpaCompliant', $value);
    }

    /**
     * Sets the isFfiecCompliant property value. The isFfiecCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isFfiecCompliant property.
    */
    public function setIsFfiecCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isFfiecCompliant', $value);
    }

    /**
     * Sets the isFileSharing property value. The isFileSharing property
     * @param CloudAppInfoState|null $value Value to set for the isFileSharing property.
    */
    public function setIsFileSharing(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isFileSharing', $value);
    }

    /**
     * Sets the isFinraCompliant property value. The isFinraCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isFinraCompliant property.
    */
    public function setIsFinraCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isFinraCompliant', $value);
    }

    /**
     * Sets the isFismaCompliant property value. The isFismaCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isFismaCompliant property.
    */
    public function setIsFismaCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isFismaCompliant', $value);
    }

    /**
     * Sets the isGaapCompliant property value. The isGaapCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isGaapCompliant property.
    */
    public function setIsGaapCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGaapCompliant', $value);
    }

    /**
     * Sets the isGdprDataProtectionImpactAssessment property value. The isGdprDataProtectionImpactAssessment property
     * @param CloudAppInfoState|null $value Value to set for the isGdprDataProtectionImpactAssessment property.
    */
    public function setIsGdprDataProtectionImpactAssessment(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprDataProtectionImpactAssessment', $value);
    }

    /**
     * Sets the isGdprDataProtectionOfficer property value. The isGdprDataProtectionOfficer property
     * @param CloudAppInfoState|null $value Value to set for the isGdprDataProtectionOfficer property.
    */
    public function setIsGdprDataProtectionOfficer(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprDataProtectionOfficer', $value);
    }

    /**
     * Sets the isGdprDataProtectionSecureCrossBorderDataTransfer property value. The isGdprDataProtectionSecureCrossBorderDataTransfer property
     * @param CloudAppInfoState|null $value Value to set for the isGdprDataProtectionSecureCrossBorderDataTransfer property.
    */
    public function setIsGdprDataProtectionSecureCrossBorderDataTransfer(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprDataProtectionSecureCrossBorderDataTransfer', $value);
    }

    /**
     * Sets the isGdprImpactAssessment property value. The isGdprImpactAssessment property
     * @param CloudAppInfoState|null $value Value to set for the isGdprImpactAssessment property.
    */
    public function setIsGdprImpactAssessment(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprImpactAssessment', $value);
    }

    /**
     * Sets the isGdprLawfulBasisForProcessing property value. The isGdprLawfulBasisForProcessing property
     * @param CloudAppInfoState|null $value Value to set for the isGdprLawfulBasisForProcessing property.
    */
    public function setIsGdprLawfulBasisForProcessing(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprLawfulBasisForProcessing', $value);
    }

    /**
     * Sets the isGdprReportDataBreaches property value. The isGdprReportDataBreaches property
     * @param CloudAppInfoState|null $value Value to set for the isGdprReportDataBreaches property.
    */
    public function setIsGdprReportDataBreaches(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprReportDataBreaches', $value);
    }

    /**
     * Sets the isGdprRightsRelatedToAutomatedDecisionMaking property value. The isGdprRightsRelatedToAutomatedDecisionMaking property
     * @param CloudAppInfoState|null $value Value to set for the isGdprRightsRelatedToAutomatedDecisionMaking property.
    */
    public function setIsGdprRightsRelatedToAutomatedDecisionMaking(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprRightsRelatedToAutomatedDecisionMaking', $value);
    }

    /**
     * Sets the isGdprRightToAccess property value. The isGdprRightToAccess property
     * @param CloudAppInfoState|null $value Value to set for the isGdprRightToAccess property.
    */
    public function setIsGdprRightToAccess(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprRightToAccess', $value);
    }

    /**
     * Sets the isGdprRightToBeInformed property value. The isGdprRightToBeInformed property
     * @param CloudAppInfoState|null $value Value to set for the isGdprRightToBeInformed property.
    */
    public function setIsGdprRightToBeInformed(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprRightToBeInformed', $value);
    }

    /**
     * Sets the isGdprRightToDataPortablility property value. The isGdprRightToDataPortablility property
     * @param CloudAppInfoState|null $value Value to set for the isGdprRightToDataPortablility property.
    */
    public function setIsGdprRightToDataPortablility(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprRightToDataPortablility', $value);
    }

    /**
     * Sets the isGdprRightToErasure property value. The isGdprRightToErasure property
     * @param CloudAppInfoState|null $value Value to set for the isGdprRightToErasure property.
    */
    public function setIsGdprRightToErasure(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprRightToErasure', $value);
    }

    /**
     * Sets the isGdprRightToObject property value. The isGdprRightToObject property
     * @param CloudAppInfoState|null $value Value to set for the isGdprRightToObject property.
    */
    public function setIsGdprRightToObject(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprRightToObject', $value);
    }

    /**
     * Sets the isGdprRightToRectification property value. The isGdprRightToRectification property
     * @param CloudAppInfoState|null $value Value to set for the isGdprRightToRectification property.
    */
    public function setIsGdprRightToRectification(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprRightToRectification', $value);
    }

    /**
     * Sets the isGdprRightToRestrictionOfProcessing property value. The isGdprRightToRestrictionOfProcessing property
     * @param CloudAppInfoState|null $value Value to set for the isGdprRightToRestrictionOfProcessing property.
    */
    public function setIsGdprRightToRestrictionOfProcessing(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprRightToRestrictionOfProcessing', $value);
    }

    /**
     * Sets the isGdprSecureCrossBorderDataControl property value. The isGdprSecureCrossBorderDataControl property
     * @param CloudAppInfoState|null $value Value to set for the isGdprSecureCrossBorderDataControl property.
    */
    public function setIsGdprSecureCrossBorderDataControl(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGdprSecureCrossBorderDataControl', $value);
    }

    /**
     * Sets the isGlbaCompliant property value. The isGlbaCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isGlbaCompliant property.
    */
    public function setIsGlbaCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isGlbaCompliant', $value);
    }

    /**
     * Sets the isHipaaCompliant property value. The isHipaaCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isHipaaCompliant property.
    */
    public function setIsHipaaCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isHipaaCompliant', $value);
    }

    /**
     * Sets the isHitrustCsfCompliant property value. The isHitrustCsfCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isHitrustCsfCompliant property.
    */
    public function setIsHitrustCsfCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isHitrustCsfCompliant', $value);
    }

    /**
     * Sets the isHttpSecurityHeadersContentSecurityPolicy property value. The isHttpSecurityHeadersContentSecurityPolicy property
     * @param CloudAppInfoState|null $value Value to set for the isHttpSecurityHeadersContentSecurityPolicy property.
    */
    public function setIsHttpSecurityHeadersContentSecurityPolicy(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isHttpSecurityHeadersContentSecurityPolicy', $value);
    }

    /**
     * Sets the isHttpSecurityHeadersStrictTransportSecurity property value. The isHttpSecurityHeadersStrictTransportSecurity property
     * @param CloudAppInfoState|null $value Value to set for the isHttpSecurityHeadersStrictTransportSecurity property.
    */
    public function setIsHttpSecurityHeadersStrictTransportSecurity(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isHttpSecurityHeadersStrictTransportSecurity', $value);
    }

    /**
     * Sets the isHttpSecurityHeadersXContentTypeOptions property value. The isHttpSecurityHeadersXContentTypeOptions property
     * @param CloudAppInfoState|null $value Value to set for the isHttpSecurityHeadersXContentTypeOptions property.
    */
    public function setIsHttpSecurityHeadersXContentTypeOptions(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isHttpSecurityHeadersXContentTypeOptions', $value);
    }

    /**
     * Sets the isHttpSecurityHeadersXFrameOptions property value. The isHttpSecurityHeadersXFrameOptions property
     * @param CloudAppInfoState|null $value Value to set for the isHttpSecurityHeadersXFrameOptions property.
    */
    public function setIsHttpSecurityHeadersXFrameOptions(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isHttpSecurityHeadersXFrameOptions', $value);
    }

    /**
     * Sets the isHttpSecurityHeadersXXssProtection property value. The isHttpSecurityHeadersXXssProtection property
     * @param CloudAppInfoState|null $value Value to set for the isHttpSecurityHeadersXXssProtection property.
    */
    public function setIsHttpSecurityHeadersXXssProtection(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isHttpSecurityHeadersXXssProtection', $value);
    }

    /**
     * Sets the isIpAddressRestriction property value. The isIpAddressRestriction property
     * @param CloudAppInfoState|null $value Value to set for the isIpAddressRestriction property.
    */
    public function setIsIpAddressRestriction(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isIpAddressRestriction', $value);
    }

    /**
     * Sets the isIsae3402Compliant property value. The isIsae3402Compliant property
     * @param CloudAppInfoState|null $value Value to set for the isIsae3402Compliant property.
    */
    public function setIsIsae3402Compliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isIsae3402Compliant', $value);
    }

    /**
     * Sets the isIso27001Compliant property value. The isIso27001Compliant property
     * @param CloudAppInfoState|null $value Value to set for the isIso27001Compliant property.
    */
    public function setIsIso27001Compliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isIso27001Compliant', $value);
    }

    /**
     * Sets the isIso27017Compliant property value. The isIso27017Compliant property
     * @param CloudAppInfoState|null $value Value to set for the isIso27017Compliant property.
    */
    public function setIsIso27017Compliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isIso27017Compliant', $value);
    }

    /**
     * Sets the isIso27018Compliant property value. The isIso27018Compliant property
     * @param CloudAppInfoState|null $value Value to set for the isIso27018Compliant property.
    */
    public function setIsIso27018Compliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isIso27018Compliant', $value);
    }

    /**
     * Sets the isItarCompliant property value. The isItarCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isItarCompliant property.
    */
    public function setIsItarCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isItarCompliant', $value);
    }

    /**
     * Sets the isMultiFactorAuthentication property value. The isMultiFactorAuthentication property
     * @param CloudAppInfoState|null $value Value to set for the isMultiFactorAuthentication property.
    */
    public function setIsMultiFactorAuthentication(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isMultiFactorAuthentication', $value);
    }

    /**
     * Sets the isPasswordPolicy property value. The isPasswordPolicy property
     * @param CloudAppInfoState|null $value Value to set for the isPasswordPolicy property.
    */
    public function setIsPasswordPolicy(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isPasswordPolicy', $value);
    }

    /**
     * Sets the isPasswordPolicyChangePasswordPeriod property value. The isPasswordPolicyChangePasswordPeriod property
     * @param CloudAppInfoState|null $value Value to set for the isPasswordPolicyChangePasswordPeriod property.
    */
    public function setIsPasswordPolicyChangePasswordPeriod(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isPasswordPolicyChangePasswordPeriod', $value);
    }

    /**
     * Sets the isPasswordPolicyCharacterCombination property value. The isPasswordPolicyCharacterCombination property
     * @param CloudAppInfoState|null $value Value to set for the isPasswordPolicyCharacterCombination property.
    */
    public function setIsPasswordPolicyCharacterCombination(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isPasswordPolicyCharacterCombination', $value);
    }

    /**
     * Sets the isPasswordPolicyPasswordHistoryAndReuse property value. The isPasswordPolicyPasswordHistoryAndReuse property
     * @param CloudAppInfoState|null $value Value to set for the isPasswordPolicyPasswordHistoryAndReuse property.
    */
    public function setIsPasswordPolicyPasswordHistoryAndReuse(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isPasswordPolicyPasswordHistoryAndReuse', $value);
    }

    /**
     * Sets the isPasswordPolicyPasswordLengthLimit property value. The isPasswordPolicyPasswordLengthLimit property
     * @param CloudAppInfoState|null $value Value to set for the isPasswordPolicyPasswordLengthLimit property.
    */
    public function setIsPasswordPolicyPasswordLengthLimit(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isPasswordPolicyPasswordLengthLimit', $value);
    }

    /**
     * Sets the isPasswordPolicyPersonalInformationUse property value. The isPasswordPolicyPersonalInformationUse property
     * @param CloudAppInfoState|null $value Value to set for the isPasswordPolicyPersonalInformationUse property.
    */
    public function setIsPasswordPolicyPersonalInformationUse(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isPasswordPolicyPersonalInformationUse', $value);
    }

    /**
     * Sets the isPenetrationTesting property value. The isPenetrationTesting property
     * @param CloudAppInfoState|null $value Value to set for the isPenetrationTesting property.
    */
    public function setIsPenetrationTesting(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isPenetrationTesting', $value);
    }

    /**
     * Sets the isPrivacyShieldCompliant property value. The isPrivacyShieldCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isPrivacyShieldCompliant property.
    */
    public function setIsPrivacyShieldCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isPrivacyShieldCompliant', $value);
    }

    /**
     * Sets the isRememberPassword property value. The isRememberPassword property
     * @param CloudAppInfoState|null $value Value to set for the isRememberPassword property.
    */
    public function setIsRememberPassword(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isRememberPassword', $value);
    }

    /**
     * Sets the isRequiresUserAuthentication property value. The isRequiresUserAuthentication property
     * @param CloudAppInfoState|null $value Value to set for the isRequiresUserAuthentication property.
    */
    public function setIsRequiresUserAuthentication(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isRequiresUserAuthentication', $value);
    }

    /**
     * Sets the isSoc1Compliant property value. The isSoc1Compliant property
     * @param CloudAppInfoState|null $value Value to set for the isSoc1Compliant property.
    */
    public function setIsSoc1Compliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isSoc1Compliant', $value);
    }

    /**
     * Sets the isSoc2Compliant property value. The isSoc2Compliant property
     * @param CloudAppInfoState|null $value Value to set for the isSoc2Compliant property.
    */
    public function setIsSoc2Compliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isSoc2Compliant', $value);
    }

    /**
     * Sets the isSoc3Compliant property value. The isSoc3Compliant property
     * @param CloudAppInfoState|null $value Value to set for the isSoc3Compliant property.
    */
    public function setIsSoc3Compliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isSoc3Compliant', $value);
    }

    /**
     * Sets the isSoxCompliant property value. The isSoxCompliant property
     * @param CloudAppInfoState|null $value Value to set for the isSoxCompliant property.
    */
    public function setIsSoxCompliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isSoxCompliant', $value);
    }

    /**
     * Sets the isSp80053Compliant property value. The isSp80053Compliant property
     * @param CloudAppInfoState|null $value Value to set for the isSp80053Compliant property.
    */
    public function setIsSp80053Compliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isSp80053Compliant', $value);
    }

    /**
     * Sets the isSsae16Compliant property value. The isSsae16Compliant property
     * @param CloudAppInfoState|null $value Value to set for the isSsae16Compliant property.
    */
    public function setIsSsae16Compliant(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isSsae16Compliant', $value);
    }

    /**
     * Sets the isSupportsSaml property value. The isSupportsSaml property
     * @param CloudAppInfoState|null $value Value to set for the isSupportsSaml property.
    */
    public function setIsSupportsSaml(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isSupportsSaml', $value);
    }

    /**
     * Sets the isTrustedCertificate property value. The isTrustedCertificate property
     * @param CloudAppInfoState|null $value Value to set for the isTrustedCertificate property.
    */
    public function setIsTrustedCertificate(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isTrustedCertificate', $value);
    }

    /**
     * Sets the isUserAuditTrail property value. The isUserAuditTrail property
     * @param CloudAppInfoState|null $value Value to set for the isUserAuditTrail property.
    */
    public function setIsUserAuditTrail(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isUserAuditTrail', $value);
    }

    /**
     * Sets the isUserCanUploadData property value. The isUserCanUploadData property
     * @param CloudAppInfoState|null $value Value to set for the isUserCanUploadData property.
    */
    public function setIsUserCanUploadData(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isUserCanUploadData', $value);
    }

    /**
     * Sets the isUserRolesSupport property value. The isUserRolesSupport property
     * @param CloudAppInfoState|null $value Value to set for the isUserRolesSupport property.
    */
    public function setIsUserRolesSupport(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isUserRolesSupport', $value);
    }

    /**
     * Sets the isValidCertificateName property value. The isValidCertificateName property
     * @param CloudAppInfoState|null $value Value to set for the isValidCertificateName property.
    */
    public function setIsValidCertificateName(?CloudAppInfoState $value): void {
        $this->getBackingStore()->set('isValidCertificateName', $value);
    }

    /**
     * Sets the latestBreachDateTime property value. Indicates the last date of the data breach for the company.
     * @param DateTime|null $value Value to set for the latestBreachDateTime property.
    */
    public function setLatestBreachDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('latestBreachDateTime', $value);
    }

    /**
     * Sets the logonUrls property value. Indicates the URL that users can use to sign into the app.
     * @param array<string>|null $value Value to set for the logonUrls property.
    */
    public function setLogonUrls(?array $value): void {
        $this->getBackingStore()->set('logonUrls', $value);
    }

    /**
     * Sets the pciDssVersion property value. The pciDssVersion property
     * @param AppInfoPciDssVersion|null $value Value to set for the pciDssVersion property.
    */
    public function setPciDssVersion(?AppInfoPciDssVersion $value): void {
        $this->getBackingStore()->set('pciDssVersion', $value);
    }

    /**
     * Sets the vendor property value. Indicates the app vendor.
     * @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value): void {
        $this->getBackingStore()->set('vendor', $value);
    }

}
