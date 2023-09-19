<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TiIndicator extends Entity implements Parsable 
{
    /**
     * Instantiates a new tiIndicator and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TiIndicator
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TiIndicator {
        return new TiIndicator();
    }

    /**
     * Gets the action property value. The action to apply if the indicator is matched from within the targetProduct security tool. Possible values are: unknown, allow, block, alert. Required.
     * @return TiAction|null
    */
    public function getAction(): ?TiAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof TiAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
    }

    /**
     * Gets the activityGroupNames property value. The cyber threat intelligence name(s) for the parties responsible for the malicious activity covered by the threat indicator.
     * @return array<string>|null
    */
    public function getActivityGroupNames(): ?array {
        $val = $this->getBackingStore()->get('activityGroupNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityGroupNames'");
    }

    /**
     * Gets the additionalInformation property value. A catchall area into which extra data from the indicator not covered by the other tiIndicator properties may be placed. Data placed into additionalInformation will typically not be utilized by the targetProduct security tool.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        $val = $this->getBackingStore()->get('additionalInformation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInformation'");
    }

    /**
     * Gets the azureTenantId property value. Stamped by the system when the indicator is ingested. The Azure Active Directory tenant id of submitting client. Required.
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        $val = $this->getBackingStore()->get('azureTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureTenantId'");
    }

    /**
     * Gets the confidence property value. An integer representing the confidence the data within the indicator accurately identifies malicious behavior. Acceptable values are 0 – 100 with 100 being the highest.
     * @return int|null
    */
    public function getConfidence(): ?int {
        $val = $this->getBackingStore()->get('confidence');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'confidence'");
    }

    /**
     * Gets the description property value. Brief description (100 characters or less) of the threat represented by the indicator. Required.
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
     * Gets the diamondModel property value. The area of the Diamond Model in which this indicator exists. Possible values are: unknown, adversary, capability, infrastructure, victim.
     * @return DiamondModel|null
    */
    public function getDiamondModel(): ?DiamondModel {
        $val = $this->getBackingStore()->get('diamondModel');
        if (is_null($val) || $val instanceof DiamondModel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'diamondModel'");
    }

    /**
     * Gets the domainName property value. The domainName property
     * @return string|null
    */
    public function getDomainName(): ?string {
        $val = $this->getBackingStore()->get('domainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainName'");
    }

    /**
     * Gets the emailEncoding property value. The emailEncoding property
     * @return string|null
    */
    public function getEmailEncoding(): ?string {
        $val = $this->getBackingStore()->get('emailEncoding');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailEncoding'");
    }

    /**
     * Gets the emailLanguage property value. The emailLanguage property
     * @return string|null
    */
    public function getEmailLanguage(): ?string {
        $val = $this->getBackingStore()->get('emailLanguage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailLanguage'");
    }

    /**
     * Gets the emailRecipient property value. The emailRecipient property
     * @return string|null
    */
    public function getEmailRecipient(): ?string {
        $val = $this->getBackingStore()->get('emailRecipient');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailRecipient'");
    }

    /**
     * Gets the emailSenderAddress property value. The emailSenderAddress property
     * @return string|null
    */
    public function getEmailSenderAddress(): ?string {
        $val = $this->getBackingStore()->get('emailSenderAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailSenderAddress'");
    }

    /**
     * Gets the emailSenderName property value. The emailSenderName property
     * @return string|null
    */
    public function getEmailSenderName(): ?string {
        $val = $this->getBackingStore()->get('emailSenderName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailSenderName'");
    }

    /**
     * Gets the emailSourceDomain property value. The emailSourceDomain property
     * @return string|null
    */
    public function getEmailSourceDomain(): ?string {
        $val = $this->getBackingStore()->get('emailSourceDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailSourceDomain'");
    }

    /**
     * Gets the emailSourceIpAddress property value. The emailSourceIpAddress property
     * @return string|null
    */
    public function getEmailSourceIpAddress(): ?string {
        $val = $this->getBackingStore()->get('emailSourceIpAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailSourceIpAddress'");
    }

    /**
     * Gets the emailSubject property value. The emailSubject property
     * @return string|null
    */
    public function getEmailSubject(): ?string {
        $val = $this->getBackingStore()->get('emailSubject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailSubject'");
    }

    /**
     * Gets the emailXMailer property value. The emailXMailer property
     * @return string|null
    */
    public function getEmailXMailer(): ?string {
        $val = $this->getBackingStore()->get('emailXMailer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailXMailer'");
    }

    /**
     * Gets the expirationDateTime property value. DateTime string indicating when the Indicator expires. All indicators must have an expiration date to avoid stale indicators persisting in the system. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * Gets the externalId property value. An identification number that ties the indicator back to the indicator provider’s system (for example, a foreign key).
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(TiAction::class)),
            'activityGroupNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setActivityGroupNames($val);
            },
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getStringValue()),
            'azureTenantId' => fn(ParseNode $n) => $o->setAzureTenantId($n->getStringValue()),
            'confidence' => fn(ParseNode $n) => $o->setConfidence($n->getIntegerValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'diamondModel' => fn(ParseNode $n) => $o->setDiamondModel($n->getEnumValue(DiamondModel::class)),
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'emailEncoding' => fn(ParseNode $n) => $o->setEmailEncoding($n->getStringValue()),
            'emailLanguage' => fn(ParseNode $n) => $o->setEmailLanguage($n->getStringValue()),
            'emailRecipient' => fn(ParseNode $n) => $o->setEmailRecipient($n->getStringValue()),
            'emailSenderAddress' => fn(ParseNode $n) => $o->setEmailSenderAddress($n->getStringValue()),
            'emailSenderName' => fn(ParseNode $n) => $o->setEmailSenderName($n->getStringValue()),
            'emailSourceDomain' => fn(ParseNode $n) => $o->setEmailSourceDomain($n->getStringValue()),
            'emailSourceIpAddress' => fn(ParseNode $n) => $o->setEmailSourceIpAddress($n->getStringValue()),
            'emailSubject' => fn(ParseNode $n) => $o->setEmailSubject($n->getStringValue()),
            'emailXMailer' => fn(ParseNode $n) => $o->setEmailXMailer($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'fileCompileDateTime' => fn(ParseNode $n) => $o->setFileCompileDateTime($n->getDateTimeValue()),
            'fileCreatedDateTime' => fn(ParseNode $n) => $o->setFileCreatedDateTime($n->getDateTimeValue()),
            'fileHashType' => fn(ParseNode $n) => $o->setFileHashType($n->getEnumValue(FileHashType::class)),
            'fileHashValue' => fn(ParseNode $n) => $o->setFileHashValue($n->getStringValue()),
            'fileMutexName' => fn(ParseNode $n) => $o->setFileMutexName($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'filePacker' => fn(ParseNode $n) => $o->setFilePacker($n->getStringValue()),
            'filePath' => fn(ParseNode $n) => $o->setFilePath($n->getStringValue()),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getIntegerValue()),
            'fileType' => fn(ParseNode $n) => $o->setFileType($n->getStringValue()),
            'ingestedDateTime' => fn(ParseNode $n) => $o->setIngestedDateTime($n->getDateTimeValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'killChain' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setKillChain($val);
            },
            'knownFalsePositives' => fn(ParseNode $n) => $o->setKnownFalsePositives($n->getStringValue()),
            'lastReportedDateTime' => fn(ParseNode $n) => $o->setLastReportedDateTime($n->getDateTimeValue()),
            'malwareFamilyNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMalwareFamilyNames($val);
            },
            'networkCidrBlock' => fn(ParseNode $n) => $o->setNetworkCidrBlock($n->getStringValue()),
            'networkDestinationAsn' => fn(ParseNode $n) => $o->setNetworkDestinationAsn($n->getIntegerValue()),
            'networkDestinationCidrBlock' => fn(ParseNode $n) => $o->setNetworkDestinationCidrBlock($n->getStringValue()),
            'networkDestinationIPv4' => fn(ParseNode $n) => $o->setNetworkDestinationIPv4($n->getStringValue()),
            'networkDestinationIPv6' => fn(ParseNode $n) => $o->setNetworkDestinationIPv6($n->getStringValue()),
            'networkDestinationPort' => fn(ParseNode $n) => $o->setNetworkDestinationPort($n->getIntegerValue()),
            'networkIPv4' => fn(ParseNode $n) => $o->setNetworkIPv4($n->getStringValue()),
            'networkIPv6' => fn(ParseNode $n) => $o->setNetworkIPv6($n->getStringValue()),
            'networkPort' => fn(ParseNode $n) => $o->setNetworkPort($n->getIntegerValue()),
            'networkProtocol' => fn(ParseNode $n) => $o->setNetworkProtocol($n->getIntegerValue()),
            'networkSourceAsn' => fn(ParseNode $n) => $o->setNetworkSourceAsn($n->getIntegerValue()),
            'networkSourceCidrBlock' => fn(ParseNode $n) => $o->setNetworkSourceCidrBlock($n->getStringValue()),
            'networkSourceIPv4' => fn(ParseNode $n) => $o->setNetworkSourceIPv4($n->getStringValue()),
            'networkSourceIPv6' => fn(ParseNode $n) => $o->setNetworkSourceIPv6($n->getStringValue()),
            'networkSourcePort' => fn(ParseNode $n) => $o->setNetworkSourcePort($n->getIntegerValue()),
            'passiveOnly' => fn(ParseNode $n) => $o->setPassiveOnly($n->getBooleanValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getIntegerValue()),
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
            'targetProduct' => fn(ParseNode $n) => $o->setTargetProduct($n->getStringValue()),
            'threatType' => fn(ParseNode $n) => $o->setThreatType($n->getStringValue()),
            'tlpLevel' => fn(ParseNode $n) => $o->setTlpLevel($n->getEnumValue(TlpLevel::class)),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
            'userAgent' => fn(ParseNode $n) => $o->setUserAgent($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileCompileDateTime property value. The fileCompileDateTime property
     * @return DateTime|null
    */
    public function getFileCompileDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('fileCompileDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileCompileDateTime'");
    }

    /**
     * Gets the fileCreatedDateTime property value. The fileCreatedDateTime property
     * @return DateTime|null
    */
    public function getFileCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('fileCreatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileCreatedDateTime'");
    }

    /**
     * Gets the fileHashType property value. The fileHashType property
     * @return FileHashType|null
    */
    public function getFileHashType(): ?FileHashType {
        $val = $this->getBackingStore()->get('fileHashType');
        if (is_null($val) || $val instanceof FileHashType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileHashType'");
    }

    /**
     * Gets the fileHashValue property value. The fileHashValue property
     * @return string|null
    */
    public function getFileHashValue(): ?string {
        $val = $this->getBackingStore()->get('fileHashValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileHashValue'");
    }

    /**
     * Gets the fileMutexName property value. The fileMutexName property
     * @return string|null
    */
    public function getFileMutexName(): ?string {
        $val = $this->getBackingStore()->get('fileMutexName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileMutexName'");
    }

    /**
     * Gets the fileName property value. The fileName property
     * @return string|null
    */
    public function getFileName(): ?string {
        $val = $this->getBackingStore()->get('fileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileName'");
    }

    /**
     * Gets the filePacker property value. The filePacker property
     * @return string|null
    */
    public function getFilePacker(): ?string {
        $val = $this->getBackingStore()->get('filePacker');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePacker'");
    }

    /**
     * Gets the filePath property value. The filePath property
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
     * Gets the fileSize property value. The fileSize property
     * @return int|null
    */
    public function getFileSize(): ?int {
        $val = $this->getBackingStore()->get('fileSize');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileSize'");
    }

    /**
     * Gets the fileType property value. The fileType property
     * @return string|null
    */
    public function getFileType(): ?string {
        $val = $this->getBackingStore()->get('fileType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileType'");
    }

    /**
     * Gets the ingestedDateTime property value. Stamped by the system when the indicator is ingested. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getIngestedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('ingestedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ingestedDateTime'");
    }

    /**
     * Gets the isActive property value. Used to deactivate indicators within system. By default, any indicator submitted is set as active. However, providers may submit existing indicators with this set to ‘False’ to deactivate indicators in the system.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        $val = $this->getBackingStore()->get('isActive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isActive'");
    }

    /**
     * Gets the killChain property value. A JSON array of strings that describes which point or points on the Kill Chain this indicator targets. See ‘killChain values’ below for exact values.
     * @return array<string>|null
    */
    public function getKillChain(): ?array {
        $val = $this->getBackingStore()->get('killChain');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'killChain'");
    }

    /**
     * Gets the knownFalsePositives property value. Scenarios in which the indicator may cause false positives. This should be human-readable text.
     * @return string|null
    */
    public function getKnownFalsePositives(): ?string {
        $val = $this->getBackingStore()->get('knownFalsePositives');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'knownFalsePositives'");
    }

    /**
     * Gets the lastReportedDateTime property value. The last time the indicator was seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastReportedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastReportedDateTime'");
    }

    /**
     * Gets the malwareFamilyNames property value. The malware family name associated with an indicator if it exists. Microsoft prefers the Microsoft malware family name if at all possible that can be found via the Windows Defender Security Intelligence threat encyclopedia.
     * @return array<string>|null
    */
    public function getMalwareFamilyNames(): ?array {
        $val = $this->getBackingStore()->get('malwareFamilyNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'malwareFamilyNames'");
    }

    /**
     * Gets the networkCidrBlock property value. The networkCidrBlock property
     * @return string|null
    */
    public function getNetworkCidrBlock(): ?string {
        $val = $this->getBackingStore()->get('networkCidrBlock');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkCidrBlock'");
    }

    /**
     * Gets the networkDestinationAsn property value. The networkDestinationAsn property
     * @return int|null
    */
    public function getNetworkDestinationAsn(): ?int {
        $val = $this->getBackingStore()->get('networkDestinationAsn');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkDestinationAsn'");
    }

    /**
     * Gets the networkDestinationCidrBlock property value. The networkDestinationCidrBlock property
     * @return string|null
    */
    public function getNetworkDestinationCidrBlock(): ?string {
        $val = $this->getBackingStore()->get('networkDestinationCidrBlock');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkDestinationCidrBlock'");
    }

    /**
     * Gets the networkDestinationIPv4 property value. The networkDestinationIPv4 property
     * @return string|null
    */
    public function getNetworkDestinationIPv4(): ?string {
        $val = $this->getBackingStore()->get('networkDestinationIPv4');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkDestinationIPv4'");
    }

    /**
     * Gets the networkDestinationIPv6 property value. The networkDestinationIPv6 property
     * @return string|null
    */
    public function getNetworkDestinationIPv6(): ?string {
        $val = $this->getBackingStore()->get('networkDestinationIPv6');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkDestinationIPv6'");
    }

    /**
     * Gets the networkDestinationPort property value. The networkDestinationPort property
     * @return int|null
    */
    public function getNetworkDestinationPort(): ?int {
        $val = $this->getBackingStore()->get('networkDestinationPort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkDestinationPort'");
    }

    /**
     * Gets the networkIPv4 property value. The networkIPv4 property
     * @return string|null
    */
    public function getNetworkIPv4(): ?string {
        $val = $this->getBackingStore()->get('networkIPv4');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkIPv4'");
    }

    /**
     * Gets the networkIPv6 property value. The networkIPv6 property
     * @return string|null
    */
    public function getNetworkIPv6(): ?string {
        $val = $this->getBackingStore()->get('networkIPv6');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkIPv6'");
    }

    /**
     * Gets the networkPort property value. The networkPort property
     * @return int|null
    */
    public function getNetworkPort(): ?int {
        $val = $this->getBackingStore()->get('networkPort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkPort'");
    }

    /**
     * Gets the networkProtocol property value. The networkProtocol property
     * @return int|null
    */
    public function getNetworkProtocol(): ?int {
        $val = $this->getBackingStore()->get('networkProtocol');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkProtocol'");
    }

    /**
     * Gets the networkSourceAsn property value. The networkSourceAsn property
     * @return int|null
    */
    public function getNetworkSourceAsn(): ?int {
        $val = $this->getBackingStore()->get('networkSourceAsn');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkSourceAsn'");
    }

    /**
     * Gets the networkSourceCidrBlock property value. The networkSourceCidrBlock property
     * @return string|null
    */
    public function getNetworkSourceCidrBlock(): ?string {
        $val = $this->getBackingStore()->get('networkSourceCidrBlock');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkSourceCidrBlock'");
    }

    /**
     * Gets the networkSourceIPv4 property value. The networkSourceIPv4 property
     * @return string|null
    */
    public function getNetworkSourceIPv4(): ?string {
        $val = $this->getBackingStore()->get('networkSourceIPv4');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkSourceIPv4'");
    }

    /**
     * Gets the networkSourceIPv6 property value. The networkSourceIPv6 property
     * @return string|null
    */
    public function getNetworkSourceIPv6(): ?string {
        $val = $this->getBackingStore()->get('networkSourceIPv6');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkSourceIPv6'");
    }

    /**
     * Gets the networkSourcePort property value. The networkSourcePort property
     * @return int|null
    */
    public function getNetworkSourcePort(): ?int {
        $val = $this->getBackingStore()->get('networkSourcePort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkSourcePort'");
    }

    /**
     * Gets the passiveOnly property value. Determines if the indicator should trigger an event that is visible to an end-user. When set to ‘true,’ security tools won't notify the end user that a ‘hit’ has occurred. This is most often treated as audit or silent mode by security products where they'll simply log that a match occurred but won't perform the action. Default value is false.
     * @return bool|null
    */
    public function getPassiveOnly(): ?bool {
        $val = $this->getBackingStore()->get('passiveOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passiveOnly'");
    }

    /**
     * Gets the severity property value. An integer representing the severity of the malicious behavior identified by the data within the indicator. Acceptable values are 0 – 5 where 5 is the most severe and zero isn't severe at all. Default value is 3.
     * @return int|null
    */
    public function getSeverity(): ?int {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the tags property value. A JSON array of strings that stores arbitrary tags/keywords.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Gets the targetProduct property value. A string value representing a single security product to which the indicator should be applied. Acceptable values are: Azure Sentinel, Microsoft Defender ATP. Required
     * @return string|null
    */
    public function getTargetProduct(): ?string {
        $val = $this->getBackingStore()->get('targetProduct');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetProduct'");
    }

    /**
     * Gets the threatType property value. Each indicator must have a valid Indicator Threat Type. Possible values are: Botnet, C2, CryptoMining, Darknet, DDoS, MaliciousUrl, Malware, Phishing, Proxy, PUA, WatchList. Required.
     * @return string|null
    */
    public function getThreatType(): ?string {
        $val = $this->getBackingStore()->get('threatType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatType'");
    }

    /**
     * Gets the tlpLevel property value. Traffic Light Protocol value for the indicator. Possible values are: unknown, white, green, amber, red. Required.
     * @return TlpLevel|null
    */
    public function getTlpLevel(): ?TlpLevel {
        $val = $this->getBackingStore()->get('tlpLevel');
        if (is_null($val) || $val instanceof TlpLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tlpLevel'");
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Gets the userAgent property value. The userAgent property
     * @return string|null
    */
    public function getUserAgent(): ?string {
        $val = $this->getBackingStore()->get('userAgent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAgent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeCollectionOfPrimitiveValues('activityGroupNames', $this->getActivityGroupNames());
        $writer->writeStringValue('additionalInformation', $this->getAdditionalInformation());
        $writer->writeStringValue('azureTenantId', $this->getAzureTenantId());
        $writer->writeIntegerValue('confidence', $this->getConfidence());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('diamondModel', $this->getDiamondModel());
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeStringValue('emailEncoding', $this->getEmailEncoding());
        $writer->writeStringValue('emailLanguage', $this->getEmailLanguage());
        $writer->writeStringValue('emailRecipient', $this->getEmailRecipient());
        $writer->writeStringValue('emailSenderAddress', $this->getEmailSenderAddress());
        $writer->writeStringValue('emailSenderName', $this->getEmailSenderName());
        $writer->writeStringValue('emailSourceDomain', $this->getEmailSourceDomain());
        $writer->writeStringValue('emailSourceIpAddress', $this->getEmailSourceIpAddress());
        $writer->writeStringValue('emailSubject', $this->getEmailSubject());
        $writer->writeStringValue('emailXMailer', $this->getEmailXMailer());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeDateTimeValue('fileCompileDateTime', $this->getFileCompileDateTime());
        $writer->writeDateTimeValue('fileCreatedDateTime', $this->getFileCreatedDateTime());
        $writer->writeEnumValue('fileHashType', $this->getFileHashType());
        $writer->writeStringValue('fileHashValue', $this->getFileHashValue());
        $writer->writeStringValue('fileMutexName', $this->getFileMutexName());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeStringValue('filePacker', $this->getFilePacker());
        $writer->writeStringValue('filePath', $this->getFilePath());
        $writer->writeIntegerValue('fileSize', $this->getFileSize());
        $writer->writeStringValue('fileType', $this->getFileType());
        $writer->writeDateTimeValue('ingestedDateTime', $this->getIngestedDateTime());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeCollectionOfPrimitiveValues('killChain', $this->getKillChain());
        $writer->writeStringValue('knownFalsePositives', $this->getKnownFalsePositives());
        $writer->writeDateTimeValue('lastReportedDateTime', $this->getLastReportedDateTime());
        $writer->writeCollectionOfPrimitiveValues('malwareFamilyNames', $this->getMalwareFamilyNames());
        $writer->writeStringValue('networkCidrBlock', $this->getNetworkCidrBlock());
        $writer->writeIntegerValue('networkDestinationAsn', $this->getNetworkDestinationAsn());
        $writer->writeStringValue('networkDestinationCidrBlock', $this->getNetworkDestinationCidrBlock());
        $writer->writeStringValue('networkDestinationIPv4', $this->getNetworkDestinationIPv4());
        $writer->writeStringValue('networkDestinationIPv6', $this->getNetworkDestinationIPv6());
        $writer->writeIntegerValue('networkDestinationPort', $this->getNetworkDestinationPort());
        $writer->writeStringValue('networkIPv4', $this->getNetworkIPv4());
        $writer->writeStringValue('networkIPv6', $this->getNetworkIPv6());
        $writer->writeIntegerValue('networkPort', $this->getNetworkPort());
        $writer->writeIntegerValue('networkProtocol', $this->getNetworkProtocol());
        $writer->writeIntegerValue('networkSourceAsn', $this->getNetworkSourceAsn());
        $writer->writeStringValue('networkSourceCidrBlock', $this->getNetworkSourceCidrBlock());
        $writer->writeStringValue('networkSourceIPv4', $this->getNetworkSourceIPv4());
        $writer->writeStringValue('networkSourceIPv6', $this->getNetworkSourceIPv6());
        $writer->writeIntegerValue('networkSourcePort', $this->getNetworkSourcePort());
        $writer->writeBooleanValue('passiveOnly', $this->getPassiveOnly());
        $writer->writeIntegerValue('severity', $this->getSeverity());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeStringValue('targetProduct', $this->getTargetProduct());
        $writer->writeStringValue('threatType', $this->getThreatType());
        $writer->writeEnumValue('tlpLevel', $this->getTlpLevel());
        $writer->writeStringValue('url', $this->getUrl());
        $writer->writeStringValue('userAgent', $this->getUserAgent());
    }

    /**
     * Sets the action property value. The action to apply if the indicator is matched from within the targetProduct security tool. Possible values are: unknown, allow, block, alert. Required.
     * @param TiAction|null $value Value to set for the action property.
    */
    public function setAction(?TiAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the activityGroupNames property value. The cyber threat intelligence name(s) for the parties responsible for the malicious activity covered by the threat indicator.
     * @param array<string>|null $value Value to set for the activityGroupNames property.
    */
    public function setActivityGroupNames(?array $value): void {
        $this->getBackingStore()->set('activityGroupNames', $value);
    }

    /**
     * Sets the additionalInformation property value. A catchall area into which extra data from the indicator not covered by the other tiIndicator properties may be placed. Data placed into additionalInformation will typically not be utilized by the targetProduct security tool.
     * @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the azureTenantId property value. Stamped by the system when the indicator is ingested. The Azure Active Directory tenant id of submitting client. Required.
     * @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value): void {
        $this->getBackingStore()->set('azureTenantId', $value);
    }

    /**
     * Sets the confidence property value. An integer representing the confidence the data within the indicator accurately identifies malicious behavior. Acceptable values are 0 – 100 with 100 being the highest.
     * @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value): void {
        $this->getBackingStore()->set('confidence', $value);
    }

    /**
     * Sets the description property value. Brief description (100 characters or less) of the threat represented by the indicator. Required.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the diamondModel property value. The area of the Diamond Model in which this indicator exists. Possible values are: unknown, adversary, capability, infrastructure, victim.
     * @param DiamondModel|null $value Value to set for the diamondModel property.
    */
    public function setDiamondModel(?DiamondModel $value): void {
        $this->getBackingStore()->set('diamondModel', $value);
    }

    /**
     * Sets the domainName property value. The domainName property
     * @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->getBackingStore()->set('domainName', $value);
    }

    /**
     * Sets the emailEncoding property value. The emailEncoding property
     * @param string|null $value Value to set for the emailEncoding property.
    */
    public function setEmailEncoding(?string $value): void {
        $this->getBackingStore()->set('emailEncoding', $value);
    }

    /**
     * Sets the emailLanguage property value. The emailLanguage property
     * @param string|null $value Value to set for the emailLanguage property.
    */
    public function setEmailLanguage(?string $value): void {
        $this->getBackingStore()->set('emailLanguage', $value);
    }

    /**
     * Sets the emailRecipient property value. The emailRecipient property
     * @param string|null $value Value to set for the emailRecipient property.
    */
    public function setEmailRecipient(?string $value): void {
        $this->getBackingStore()->set('emailRecipient', $value);
    }

    /**
     * Sets the emailSenderAddress property value. The emailSenderAddress property
     * @param string|null $value Value to set for the emailSenderAddress property.
    */
    public function setEmailSenderAddress(?string $value): void {
        $this->getBackingStore()->set('emailSenderAddress', $value);
    }

    /**
     * Sets the emailSenderName property value. The emailSenderName property
     * @param string|null $value Value to set for the emailSenderName property.
    */
    public function setEmailSenderName(?string $value): void {
        $this->getBackingStore()->set('emailSenderName', $value);
    }

    /**
     * Sets the emailSourceDomain property value. The emailSourceDomain property
     * @param string|null $value Value to set for the emailSourceDomain property.
    */
    public function setEmailSourceDomain(?string $value): void {
        $this->getBackingStore()->set('emailSourceDomain', $value);
    }

    /**
     * Sets the emailSourceIpAddress property value. The emailSourceIpAddress property
     * @param string|null $value Value to set for the emailSourceIpAddress property.
    */
    public function setEmailSourceIpAddress(?string $value): void {
        $this->getBackingStore()->set('emailSourceIpAddress', $value);
    }

    /**
     * Sets the emailSubject property value. The emailSubject property
     * @param string|null $value Value to set for the emailSubject property.
    */
    public function setEmailSubject(?string $value): void {
        $this->getBackingStore()->set('emailSubject', $value);
    }

    /**
     * Sets the emailXMailer property value. The emailXMailer property
     * @param string|null $value Value to set for the emailXMailer property.
    */
    public function setEmailXMailer(?string $value): void {
        $this->getBackingStore()->set('emailXMailer', $value);
    }

    /**
     * Sets the expirationDateTime property value. DateTime string indicating when the Indicator expires. All indicators must have an expiration date to avoid stale indicators persisting in the system. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the externalId property value. An identification number that ties the indicator back to the indicator provider’s system (for example, a foreign key).
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the fileCompileDateTime property value. The fileCompileDateTime property
     * @param DateTime|null $value Value to set for the fileCompileDateTime property.
    */
    public function setFileCompileDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('fileCompileDateTime', $value);
    }

    /**
     * Sets the fileCreatedDateTime property value. The fileCreatedDateTime property
     * @param DateTime|null $value Value to set for the fileCreatedDateTime property.
    */
    public function setFileCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('fileCreatedDateTime', $value);
    }

    /**
     * Sets the fileHashType property value. The fileHashType property
     * @param FileHashType|null $value Value to set for the fileHashType property.
    */
    public function setFileHashType(?FileHashType $value): void {
        $this->getBackingStore()->set('fileHashType', $value);
    }

    /**
     * Sets the fileHashValue property value. The fileHashValue property
     * @param string|null $value Value to set for the fileHashValue property.
    */
    public function setFileHashValue(?string $value): void {
        $this->getBackingStore()->set('fileHashValue', $value);
    }

    /**
     * Sets the fileMutexName property value. The fileMutexName property
     * @param string|null $value Value to set for the fileMutexName property.
    */
    public function setFileMutexName(?string $value): void {
        $this->getBackingStore()->set('fileMutexName', $value);
    }

    /**
     * Sets the fileName property value. The fileName property
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the filePacker property value. The filePacker property
     * @param string|null $value Value to set for the filePacker property.
    */
    public function setFilePacker(?string $value): void {
        $this->getBackingStore()->set('filePacker', $value);
    }

    /**
     * Sets the filePath property value. The filePath property
     * @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value): void {
        $this->getBackingStore()->set('filePath', $value);
    }

    /**
     * Sets the fileSize property value. The fileSize property
     * @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value): void {
        $this->getBackingStore()->set('fileSize', $value);
    }

    /**
     * Sets the fileType property value. The fileType property
     * @param string|null $value Value to set for the fileType property.
    */
    public function setFileType(?string $value): void {
        $this->getBackingStore()->set('fileType', $value);
    }

    /**
     * Sets the ingestedDateTime property value. Stamped by the system when the indicator is ingested. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the ingestedDateTime property.
    */
    public function setIngestedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('ingestedDateTime', $value);
    }

    /**
     * Sets the isActive property value. Used to deactivate indicators within system. By default, any indicator submitted is set as active. However, providers may submit existing indicators with this set to ‘False’ to deactivate indicators in the system.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the killChain property value. A JSON array of strings that describes which point or points on the Kill Chain this indicator targets. See ‘killChain values’ below for exact values.
     * @param array<string>|null $value Value to set for the killChain property.
    */
    public function setKillChain(?array $value): void {
        $this->getBackingStore()->set('killChain', $value);
    }

    /**
     * Sets the knownFalsePositives property value. Scenarios in which the indicator may cause false positives. This should be human-readable text.
     * @param string|null $value Value to set for the knownFalsePositives property.
    */
    public function setKnownFalsePositives(?string $value): void {
        $this->getBackingStore()->set('knownFalsePositives', $value);
    }

    /**
     * Sets the lastReportedDateTime property value. The last time the indicator was seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastReportedDateTime', $value);
    }

    /**
     * Sets the malwareFamilyNames property value. The malware family name associated with an indicator if it exists. Microsoft prefers the Microsoft malware family name if at all possible that can be found via the Windows Defender Security Intelligence threat encyclopedia.
     * @param array<string>|null $value Value to set for the malwareFamilyNames property.
    */
    public function setMalwareFamilyNames(?array $value): void {
        $this->getBackingStore()->set('malwareFamilyNames', $value);
    }

    /**
     * Sets the networkCidrBlock property value. The networkCidrBlock property
     * @param string|null $value Value to set for the networkCidrBlock property.
    */
    public function setNetworkCidrBlock(?string $value): void {
        $this->getBackingStore()->set('networkCidrBlock', $value);
    }

    /**
     * Sets the networkDestinationAsn property value. The networkDestinationAsn property
     * @param int|null $value Value to set for the networkDestinationAsn property.
    */
    public function setNetworkDestinationAsn(?int $value): void {
        $this->getBackingStore()->set('networkDestinationAsn', $value);
    }

    /**
     * Sets the networkDestinationCidrBlock property value. The networkDestinationCidrBlock property
     * @param string|null $value Value to set for the networkDestinationCidrBlock property.
    */
    public function setNetworkDestinationCidrBlock(?string $value): void {
        $this->getBackingStore()->set('networkDestinationCidrBlock', $value);
    }

    /**
     * Sets the networkDestinationIPv4 property value. The networkDestinationIPv4 property
     * @param string|null $value Value to set for the networkDestinationIPv4 property.
    */
    public function setNetworkDestinationIPv4(?string $value): void {
        $this->getBackingStore()->set('networkDestinationIPv4', $value);
    }

    /**
     * Sets the networkDestinationIPv6 property value. The networkDestinationIPv6 property
     * @param string|null $value Value to set for the networkDestinationIPv6 property.
    */
    public function setNetworkDestinationIPv6(?string $value): void {
        $this->getBackingStore()->set('networkDestinationIPv6', $value);
    }

    /**
     * Sets the networkDestinationPort property value. The networkDestinationPort property
     * @param int|null $value Value to set for the networkDestinationPort property.
    */
    public function setNetworkDestinationPort(?int $value): void {
        $this->getBackingStore()->set('networkDestinationPort', $value);
    }

    /**
     * Sets the networkIPv4 property value. The networkIPv4 property
     * @param string|null $value Value to set for the networkIPv4 property.
    */
    public function setNetworkIPv4(?string $value): void {
        $this->getBackingStore()->set('networkIPv4', $value);
    }

    /**
     * Sets the networkIPv6 property value. The networkIPv6 property
     * @param string|null $value Value to set for the networkIPv6 property.
    */
    public function setNetworkIPv6(?string $value): void {
        $this->getBackingStore()->set('networkIPv6', $value);
    }

    /**
     * Sets the networkPort property value. The networkPort property
     * @param int|null $value Value to set for the networkPort property.
    */
    public function setNetworkPort(?int $value): void {
        $this->getBackingStore()->set('networkPort', $value);
    }

    /**
     * Sets the networkProtocol property value. The networkProtocol property
     * @param int|null $value Value to set for the networkProtocol property.
    */
    public function setNetworkProtocol(?int $value): void {
        $this->getBackingStore()->set('networkProtocol', $value);
    }

    /**
     * Sets the networkSourceAsn property value. The networkSourceAsn property
     * @param int|null $value Value to set for the networkSourceAsn property.
    */
    public function setNetworkSourceAsn(?int $value): void {
        $this->getBackingStore()->set('networkSourceAsn', $value);
    }

    /**
     * Sets the networkSourceCidrBlock property value. The networkSourceCidrBlock property
     * @param string|null $value Value to set for the networkSourceCidrBlock property.
    */
    public function setNetworkSourceCidrBlock(?string $value): void {
        $this->getBackingStore()->set('networkSourceCidrBlock', $value);
    }

    /**
     * Sets the networkSourceIPv4 property value. The networkSourceIPv4 property
     * @param string|null $value Value to set for the networkSourceIPv4 property.
    */
    public function setNetworkSourceIPv4(?string $value): void {
        $this->getBackingStore()->set('networkSourceIPv4', $value);
    }

    /**
     * Sets the networkSourceIPv6 property value. The networkSourceIPv6 property
     * @param string|null $value Value to set for the networkSourceIPv6 property.
    */
    public function setNetworkSourceIPv6(?string $value): void {
        $this->getBackingStore()->set('networkSourceIPv6', $value);
    }

    /**
     * Sets the networkSourcePort property value. The networkSourcePort property
     * @param int|null $value Value to set for the networkSourcePort property.
    */
    public function setNetworkSourcePort(?int $value): void {
        $this->getBackingStore()->set('networkSourcePort', $value);
    }

    /**
     * Sets the passiveOnly property value. Determines if the indicator should trigger an event that is visible to an end-user. When set to ‘true,’ security tools won't notify the end user that a ‘hit’ has occurred. This is most often treated as audit or silent mode by security products where they'll simply log that a match occurred but won't perform the action. Default value is false.
     * @param bool|null $value Value to set for the passiveOnly property.
    */
    public function setPassiveOnly(?bool $value): void {
        $this->getBackingStore()->set('passiveOnly', $value);
    }

    /**
     * Sets the severity property value. An integer representing the severity of the malicious behavior identified by the data within the indicator. Acceptable values are 0 – 5 where 5 is the most severe and zero isn't severe at all. Default value is 3.
     * @param int|null $value Value to set for the severity property.
    */
    public function setSeverity(?int $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the tags property value. A JSON array of strings that stores arbitrary tags/keywords.
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the targetProduct property value. A string value representing a single security product to which the indicator should be applied. Acceptable values are: Azure Sentinel, Microsoft Defender ATP. Required
     * @param string|null $value Value to set for the targetProduct property.
    */
    public function setTargetProduct(?string $value): void {
        $this->getBackingStore()->set('targetProduct', $value);
    }

    /**
     * Sets the threatType property value. Each indicator must have a valid Indicator Threat Type. Possible values are: Botnet, C2, CryptoMining, Darknet, DDoS, MaliciousUrl, Malware, Phishing, Proxy, PUA, WatchList. Required.
     * @param string|null $value Value to set for the threatType property.
    */
    public function setThreatType(?string $value): void {
        $this->getBackingStore()->set('threatType', $value);
    }

    /**
     * Sets the tlpLevel property value. Traffic Light Protocol value for the indicator. Possible values are: unknown, white, green, amber, red. Required.
     * @param TlpLevel|null $value Value to set for the tlpLevel property.
    */
    public function setTlpLevel(?TlpLevel $value): void {
        $this->getBackingStore()->set('tlpLevel', $value);
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

    /**
     * Sets the userAgent property value. The userAgent property
     * @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value): void {
        $this->getBackingStore()->set('userAgent', $value);
    }

}
