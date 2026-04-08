<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BaseAuditRecord extends Entity implements Parsable 
{
    /**
     * Instantiates a new BaseAuditRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseAuditRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseAuditRecord {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.dlp.complianceBaseAuditRecord': return new ComplianceBaseAuditRecord();
                case '#microsoft.graph.security.dlp.complianceDLPBaseAuditRecord': return new ComplianceDLPBaseAuditRecord();
                case '#microsoft.graph.security.dlp.complianceDlpEndpointAuditRecord': return new ComplianceDlpEndpointAuditRecord();
                case '#microsoft.graph.security.dlp.complianceDlpExchangeAuditRecord': return new ComplianceDlpExchangeAuditRecord();
                case '#microsoft.graph.security.dlp.complianceDlpSharePointAuditRecord': return new ComplianceDlpSharePointAuditRecord();
            }
        }
        return new BaseAuditRecord();
    }

    /**
     * Gets the agentBlueprintId property value. The agentBlueprintId property
     * @return string|null
    */
    public function getAgentBlueprintId(): ?string {
        $val = $this->getBackingStore()->get('agentBlueprintId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentBlueprintId'");
    }

    /**
     * Gets the agentBlueprintName property value. The agentBlueprintName property
     * @return string|null
    */
    public function getAgentBlueprintName(): ?string {
        $val = $this->getBackingStore()->get('agentBlueprintName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentBlueprintName'");
    }

    /**
     * Gets the agentId property value. The agentId property
     * @return string|null
    */
    public function getAgentId(): ?string {
        $val = $this->getBackingStore()->get('agentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentId'");
    }

    /**
     * Gets the agentName property value. The agentName property
     * @return string|null
    */
    public function getAgentName(): ?string {
        $val = $this->getBackingStore()->get('agentName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentName'");
    }

    /**
     * Gets the agentPlatform property value. The agentPlatform property
     * @return string|null
    */
    public function getAgentPlatform(): ?string {
        $val = $this->getBackingStore()->get('agentPlatform');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentPlatform'");
    }

    /**
     * Gets the agentVersion property value. The agentVersion property
     * @return string|null
    */
    public function getAgentVersion(): ?string {
        $val = $this->getBackingStore()->get('agentVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentVersion'");
    }

    /**
     * Gets the appAccessContext property value. The appAccessContext property
     * @return AppAccessContext|null
    */
    public function getAppAccessContext(): ?AppAccessContext {
        $val = $this->getBackingStore()->get('appAccessContext');
        if (is_null($val) || $val instanceof AppAccessContext) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appAccessContext'");
    }

    /**
     * Gets the appIdentity property value. The appIdentity property
     * @return string|null
    */
    public function getAppIdentity(): ?string {
        $val = $this->getBackingStore()->get('appIdentity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appIdentity'");
    }

    /**
     * Gets the applicationName property value. The applicationName property
     * @return string|null
    */
    public function getApplicationName(): ?string {
        $val = $this->getBackingStore()->get('applicationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationName'");
    }

    /**
     * Gets the associatedAdminUnitIds property value. The associatedAdminUnitIds property
     * @return array<string>|null
    */
    public function getAssociatedAdminUnitIds(): ?array {
        $val = $this->getBackingStore()->get('associatedAdminUnitIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedAdminUnitIds'");
    }

    /**
     * Gets the correlationIdentity property value. The correlationIdentity property
     * @return string|null
    */
    public function getCorrelationIdentity(): ?string {
        $val = $this->getBackingStore()->get('correlationIdentity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationIdentity'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return Date|null
    */
    public function getCreatedDateTime(): ?Date {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentBlueprintId' => fn(ParseNode $n) => $o->setAgentBlueprintId($n->getStringValue()),
            'agentBlueprintName' => fn(ParseNode $n) => $o->setAgentBlueprintName($n->getStringValue()),
            'agentId' => fn(ParseNode $n) => $o->setAgentId($n->getStringValue()),
            'agentName' => fn(ParseNode $n) => $o->setAgentName($n->getStringValue()),
            'agentPlatform' => fn(ParseNode $n) => $o->setAgentPlatform($n->getStringValue()),
            'agentVersion' => fn(ParseNode $n) => $o->setAgentVersion($n->getStringValue()),
            'appAccessContext' => fn(ParseNode $n) => $o->setAppAccessContext($n->getObjectValue([AppAccessContext::class, 'createFromDiscriminatorValue'])),
            'appIdentity' => fn(ParseNode $n) => $o->setAppIdentity($n->getStringValue()),
            'applicationName' => fn(ParseNode $n) => $o->setApplicationName($n->getStringValue()),
            'associatedAdminUnitIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAssociatedAdminUnitIds($val);
            },
            'correlationIdentity' => fn(ParseNode $n) => $o->setCorrelationIdentity($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateValue()),
            'isRequiresCustomerKeyEncryption' => fn(ParseNode $n) => $o->setIsRequiresCustomerKeyEncryption($n->getBooleanValue()),
            'operation' => fn(ParseNode $n) => $o->setOperation($n->getStringValue()),
            'opId' => fn(ParseNode $n) => $o->setOpId($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'parentId' => fn(ParseNode $n) => $o->setParentId($n->getStringValue()),
            'purpose' => fn(ParseNode $n) => $o->setPurpose($n->getEnumValue(PurposeType::class)),
            'recordType' => fn(ParseNode $n) => $o->setRecordType($n->getEnumValue(AuditRecordType::class)),
            'resultStatus' => fn(ParseNode $n) => $o->setResultStatus($n->getStringValue()),
            'scopingEntityIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setScopingEntityIds($val);
            },
            'scopingEntityType' => fn(ParseNode $n) => $o->setScopingEntityType($n->getIntegerValue()),
            'sessionIdentity' => fn(ParseNode $n) => $o->setSessionIdentity($n->getStringValue()),
            'subjectType' => fn(ParseNode $n) => $o->setSubjectType($n->getStringValue()),
            'subscription' => fn(ParseNode $n) => $o->setSubscription($n->getObjectValue([SubscriptionInfo::class, 'createFromDiscriminatorValue'])),
            'userKey' => fn(ParseNode $n) => $o->setUserKey($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(UserType::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
            'workload' => fn(ParseNode $n) => $o->setWorkload($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isRequiresCustomerKeyEncryption property value. The isRequiresCustomerKeyEncryption property
     * @return bool|null
    */
    public function getIsRequiresCustomerKeyEncryption(): ?bool {
        $val = $this->getBackingStore()->get('isRequiresCustomerKeyEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequiresCustomerKeyEncryption'");
    }

    /**
     * Gets the operation property value. The operation property
     * @return string|null
    */
    public function getOperation(): ?string {
        $val = $this->getBackingStore()->get('operation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operation'");
    }

    /**
     * Gets the opId property value. The opId property
     * @return string|null
    */
    public function getOpId(): ?string {
        $val = $this->getBackingStore()->get('opId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'opId'");
    }

    /**
     * Gets the organizationId property value. The organizationId property
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        $val = $this->getBackingStore()->get('organizationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationId'");
    }

    /**
     * Gets the parentId property value. The parentId property
     * @return string|null
    */
    public function getParentId(): ?string {
        $val = $this->getBackingStore()->get('parentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentId'");
    }

    /**
     * Gets the purpose property value. The purpose property
     * @return PurposeType|null
    */
    public function getPurpose(): ?PurposeType {
        $val = $this->getBackingStore()->get('purpose');
        if (is_null($val) || $val instanceof PurposeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'purpose'");
    }

    /**
     * Gets the recordType property value. The recordType property
     * @return AuditRecordType|null
    */
    public function getRecordType(): ?AuditRecordType {
        $val = $this->getBackingStore()->get('recordType');
        if (is_null($val) || $val instanceof AuditRecordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordType'");
    }

    /**
     * Gets the resultStatus property value. The resultStatus property
     * @return string|null
    */
    public function getResultStatus(): ?string {
        $val = $this->getBackingStore()->get('resultStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resultStatus'");
    }

    /**
     * Gets the scopingEntityIds property value. The scopingEntityIds property
     * @return array<string>|null
    */
    public function getScopingEntityIds(): ?array {
        $val = $this->getBackingStore()->get('scopingEntityIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopingEntityIds'");
    }

    /**
     * Gets the scopingEntityType property value. The scopingEntityType property
     * @return int|null
    */
    public function getScopingEntityType(): ?int {
        $val = $this->getBackingStore()->get('scopingEntityType');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopingEntityType'");
    }

    /**
     * Gets the sessionIdentity property value. The sessionIdentity property
     * @return string|null
    */
    public function getSessionIdentity(): ?string {
        $val = $this->getBackingStore()->get('sessionIdentity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionIdentity'");
    }

    /**
     * Gets the subjectType property value. The subjectType property
     * @return string|null
    */
    public function getSubjectType(): ?string {
        $val = $this->getBackingStore()->get('subjectType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectType'");
    }

    /**
     * Gets the subscription property value. The subscription property
     * @return SubscriptionInfo|null
    */
    public function getSubscription(): ?SubscriptionInfo {
        $val = $this->getBackingStore()->get('subscription');
        if (is_null($val) || $val instanceof SubscriptionInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscription'");
    }

    /**
     * Gets the userKey property value. The userKey property
     * @return string|null
    */
    public function getUserKey(): ?string {
        $val = $this->getBackingStore()->get('userKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userKey'");
    }

    /**
     * Gets the userType property value. The userType property
     * @return UserType|null
    */
    public function getUserType(): ?UserType {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || $val instanceof UserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Gets the version property value. The version property
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Gets the workload property value. The workload property
     * @return string|null
    */
    public function getWorkload(): ?string {
        $val = $this->getBackingStore()->get('workload');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workload'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentBlueprintId', $this->getAgentBlueprintId());
        $writer->writeStringValue('agentBlueprintName', $this->getAgentBlueprintName());
        $writer->writeStringValue('agentId', $this->getAgentId());
        $writer->writeStringValue('agentName', $this->getAgentName());
        $writer->writeStringValue('agentPlatform', $this->getAgentPlatform());
        $writer->writeStringValue('agentVersion', $this->getAgentVersion());
        $writer->writeObjectValue('appAccessContext', $this->getAppAccessContext());
        $writer->writeStringValue('appIdentity', $this->getAppIdentity());
        $writer->writeStringValue('applicationName', $this->getApplicationName());
        $writer->writeCollectionOfPrimitiveValues('associatedAdminUnitIds', $this->getAssociatedAdminUnitIds());
        $writer->writeStringValue('correlationIdentity', $this->getCorrelationIdentity());
        $writer->writeDateValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBooleanValue('isRequiresCustomerKeyEncryption', $this->getIsRequiresCustomerKeyEncryption());
        $writer->writeStringValue('operation', $this->getOperation());
        $writer->writeStringValue('opId', $this->getOpId());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('parentId', $this->getParentId());
        $writer->writeEnumValue('purpose', $this->getPurpose());
        $writer->writeEnumValue('recordType', $this->getRecordType());
        $writer->writeStringValue('resultStatus', $this->getResultStatus());
        $writer->writeCollectionOfPrimitiveValues('scopingEntityIds', $this->getScopingEntityIds());
        $writer->writeIntegerValue('scopingEntityType', $this->getScopingEntityType());
        $writer->writeStringValue('sessionIdentity', $this->getSessionIdentity());
        $writer->writeStringValue('subjectType', $this->getSubjectType());
        $writer->writeObjectValue('subscription', $this->getSubscription());
        $writer->writeStringValue('userKey', $this->getUserKey());
        $writer->writeEnumValue('userType', $this->getUserType());
        $writer->writeIntegerValue('version', $this->getVersion());
        $writer->writeStringValue('workload', $this->getWorkload());
    }

    /**
     * Sets the agentBlueprintId property value. The agentBlueprintId property
     * @param string|null $value Value to set for the agentBlueprintId property.
    */
    public function setAgentBlueprintId(?string $value): void {
        $this->getBackingStore()->set('agentBlueprintId', $value);
    }

    /**
     * Sets the agentBlueprintName property value. The agentBlueprintName property
     * @param string|null $value Value to set for the agentBlueprintName property.
    */
    public function setAgentBlueprintName(?string $value): void {
        $this->getBackingStore()->set('agentBlueprintName', $value);
    }

    /**
     * Sets the agentId property value. The agentId property
     * @param string|null $value Value to set for the agentId property.
    */
    public function setAgentId(?string $value): void {
        $this->getBackingStore()->set('agentId', $value);
    }

    /**
     * Sets the agentName property value. The agentName property
     * @param string|null $value Value to set for the agentName property.
    */
    public function setAgentName(?string $value): void {
        $this->getBackingStore()->set('agentName', $value);
    }

    /**
     * Sets the agentPlatform property value. The agentPlatform property
     * @param string|null $value Value to set for the agentPlatform property.
    */
    public function setAgentPlatform(?string $value): void {
        $this->getBackingStore()->set('agentPlatform', $value);
    }

    /**
     * Sets the agentVersion property value. The agentVersion property
     * @param string|null $value Value to set for the agentVersion property.
    */
    public function setAgentVersion(?string $value): void {
        $this->getBackingStore()->set('agentVersion', $value);
    }

    /**
     * Sets the appAccessContext property value. The appAccessContext property
     * @param AppAccessContext|null $value Value to set for the appAccessContext property.
    */
    public function setAppAccessContext(?AppAccessContext $value): void {
        $this->getBackingStore()->set('appAccessContext', $value);
    }

    /**
     * Sets the appIdentity property value. The appIdentity property
     * @param string|null $value Value to set for the appIdentity property.
    */
    public function setAppIdentity(?string $value): void {
        $this->getBackingStore()->set('appIdentity', $value);
    }

    /**
     * Sets the applicationName property value. The applicationName property
     * @param string|null $value Value to set for the applicationName property.
    */
    public function setApplicationName(?string $value): void {
        $this->getBackingStore()->set('applicationName', $value);
    }

    /**
     * Sets the associatedAdminUnitIds property value. The associatedAdminUnitIds property
     * @param array<string>|null $value Value to set for the associatedAdminUnitIds property.
    */
    public function setAssociatedAdminUnitIds(?array $value): void {
        $this->getBackingStore()->set('associatedAdminUnitIds', $value);
    }

    /**
     * Sets the correlationIdentity property value. The correlationIdentity property
     * @param string|null $value Value to set for the correlationIdentity property.
    */
    public function setCorrelationIdentity(?string $value): void {
        $this->getBackingStore()->set('correlationIdentity', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param Date|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?Date $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isRequiresCustomerKeyEncryption property value. The isRequiresCustomerKeyEncryption property
     * @param bool|null $value Value to set for the isRequiresCustomerKeyEncryption property.
    */
    public function setIsRequiresCustomerKeyEncryption(?bool $value): void {
        $this->getBackingStore()->set('isRequiresCustomerKeyEncryption', $value);
    }

    /**
     * Sets the operation property value. The operation property
     * @param string|null $value Value to set for the operation property.
    */
    public function setOperation(?string $value): void {
        $this->getBackingStore()->set('operation', $value);
    }

    /**
     * Sets the opId property value. The opId property
     * @param string|null $value Value to set for the opId property.
    */
    public function setOpId(?string $value): void {
        $this->getBackingStore()->set('opId', $value);
    }

    /**
     * Sets the organizationId property value. The organizationId property
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->getBackingStore()->set('organizationId', $value);
    }

    /**
     * Sets the parentId property value. The parentId property
     * @param string|null $value Value to set for the parentId property.
    */
    public function setParentId(?string $value): void {
        $this->getBackingStore()->set('parentId', $value);
    }

    /**
     * Sets the purpose property value. The purpose property
     * @param PurposeType|null $value Value to set for the purpose property.
    */
    public function setPurpose(?PurposeType $value): void {
        $this->getBackingStore()->set('purpose', $value);
    }

    /**
     * Sets the recordType property value. The recordType property
     * @param AuditRecordType|null $value Value to set for the recordType property.
    */
    public function setRecordType(?AuditRecordType $value): void {
        $this->getBackingStore()->set('recordType', $value);
    }

    /**
     * Sets the resultStatus property value. The resultStatus property
     * @param string|null $value Value to set for the resultStatus property.
    */
    public function setResultStatus(?string $value): void {
        $this->getBackingStore()->set('resultStatus', $value);
    }

    /**
     * Sets the scopingEntityIds property value. The scopingEntityIds property
     * @param array<string>|null $value Value to set for the scopingEntityIds property.
    */
    public function setScopingEntityIds(?array $value): void {
        $this->getBackingStore()->set('scopingEntityIds', $value);
    }

    /**
     * Sets the scopingEntityType property value. The scopingEntityType property
     * @param int|null $value Value to set for the scopingEntityType property.
    */
    public function setScopingEntityType(?int $value): void {
        $this->getBackingStore()->set('scopingEntityType', $value);
    }

    /**
     * Sets the sessionIdentity property value. The sessionIdentity property
     * @param string|null $value Value to set for the sessionIdentity property.
    */
    public function setSessionIdentity(?string $value): void {
        $this->getBackingStore()->set('sessionIdentity', $value);
    }

    /**
     * Sets the subjectType property value. The subjectType property
     * @param string|null $value Value to set for the subjectType property.
    */
    public function setSubjectType(?string $value): void {
        $this->getBackingStore()->set('subjectType', $value);
    }

    /**
     * Sets the subscription property value. The subscription property
     * @param SubscriptionInfo|null $value Value to set for the subscription property.
    */
    public function setSubscription(?SubscriptionInfo $value): void {
        $this->getBackingStore()->set('subscription', $value);
    }

    /**
     * Sets the userKey property value. The userKey property
     * @param string|null $value Value to set for the userKey property.
    */
    public function setUserKey(?string $value): void {
        $this->getBackingStore()->set('userKey', $value);
    }

    /**
     * Sets the userType property value. The userType property
     * @param UserType|null $value Value to set for the userType property.
    */
    public function setUserType(?UserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the workload property value. The workload property
     * @param string|null $value Value to set for the workload property.
    */
    public function setWorkload(?string $value): void {
        $this->getBackingStore()->set('workload', $value);
    }

}
