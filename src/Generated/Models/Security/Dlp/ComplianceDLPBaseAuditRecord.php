<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ComplianceDLPBaseAuditRecord extends ComplianceBaseAuditRecord implements Parsable 
{
    /**
     * Instantiates a new ComplianceDLPBaseAuditRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.dlp.complianceDLPBaseAuditRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceDLPBaseAuditRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceDLPBaseAuditRecord {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.dlp.complianceDlpEndpointAuditRecord': return new ComplianceDlpEndpointAuditRecord();
                case '#microsoft.graph.security.dlp.complianceDlpExchangeAuditRecord': return new ComplianceDlpExchangeAuditRecord();
                case '#microsoft.graph.security.dlp.complianceDlpSharePointAuditRecord': return new ComplianceDlpSharePointAuditRecord();
            }
        }
        return new ComplianceDLPBaseAuditRecord();
    }

    /**
     * Gets the enforcementType property value. The enforcementType property
     * @return EnforcementType|null
    */
    public function getEnforcementType(): ?EnforcementType {
        $val = $this->getBackingStore()->get('enforcementType');
        if (is_null($val) || $val instanceof EnforcementType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcementType'");
    }

    /**
     * Gets the evaluationSource property value. The evaluationSource property
     * @return string|null
    */
    public function getEvaluationSource(): ?string {
        $val = $this->getBackingStore()->get('evaluationSource');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluationSource'");
    }

    /**
     * Gets the exceptionInfo property value. The exceptionInfo property
     * @return ExceptionInfo|null
    */
    public function getExceptionInfo(): ?ExceptionInfo {
        $val = $this->getBackingStore()->get('exceptionInfo');
        if (is_null($val) || $val instanceof ExceptionInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exceptionInfo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enforcementType' => fn(ParseNode $n) => $o->setEnforcementType($n->getEnumValue(EnforcementType::class)),
            'evaluationSource' => fn(ParseNode $n) => $o->setEvaluationSource($n->getStringValue()),
            'exceptionInfo' => fn(ParseNode $n) => $o->setExceptionInfo($n->getObjectValue([ExceptionInfo::class, 'createFromDiscriminatorValue'])),
            'incidentId' => fn(ParseNode $n) => $o->setIncidentId($n->getStringValue()),
            'isSensitiveInfoDetectionIsIncluded' => fn(ParseNode $n) => $o->setIsSensitiveInfoDetectionIsIncluded($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            'policyDetails' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPolicyDetails($val);
            },
            'remediationDetails' => fn(ParseNode $n) => $o->setRemediationDetails($n->getObjectValue([RemediationInfo::class, 'createFromDiscriminatorValue'])),
            'sessionMetadata' => fn(ParseNode $n) => $o->setSessionMetadata($n->getObjectValue([SessionMetadataInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the incidentId property value. The incidentId property
     * @return string|null
    */
    public function getIncidentId(): ?string {
        $val = $this->getBackingStore()->get('incidentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incidentId'");
    }

    /**
     * Gets the isSensitiveInfoDetectionIsIncluded property value. The isSensitiveInfoDetectionIsIncluded property
     * @return bool|null
    */
    public function getIsSensitiveInfoDetectionIsIncluded(): ?bool {
        $val = $this->getBackingStore()->get('isSensitiveInfoDetectionIsIncluded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSensitiveInfoDetectionIsIncluded'");
    }

    /**
     * Gets the location property value. The location property
     * @return string|null
    */
    public function getLocation(): ?string {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
    }

    /**
     * Gets the policyDetails property value. The policyDetails property
     * @return array<string>|null
    */
    public function getPolicyDetails(): ?array {
        $val = $this->getBackingStore()->get('policyDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyDetails'");
    }

    /**
     * Gets the remediationDetails property value. The remediationDetails property
     * @return RemediationInfo|null
    */
    public function getRemediationDetails(): ?RemediationInfo {
        $val = $this->getBackingStore()->get('remediationDetails');
        if (is_null($val) || $val instanceof RemediationInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationDetails'");
    }

    /**
     * Gets the sessionMetadata property value. The sessionMetadata property
     * @return SessionMetadataInfo|null
    */
    public function getSessionMetadata(): ?SessionMetadataInfo {
        $val = $this->getBackingStore()->get('sessionMetadata');
        if (is_null($val) || $val instanceof SessionMetadataInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionMetadata'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('enforcementType', $this->getEnforcementType());
        $writer->writeStringValue('evaluationSource', $this->getEvaluationSource());
        $writer->writeObjectValue('exceptionInfo', $this->getExceptionInfo());
        $writer->writeStringValue('incidentId', $this->getIncidentId());
        $writer->writeBooleanValue('isSensitiveInfoDetectionIsIncluded', $this->getIsSensitiveInfoDetectionIsIncluded());
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeCollectionOfPrimitiveValues('policyDetails', $this->getPolicyDetails());
        $writer->writeObjectValue('remediationDetails', $this->getRemediationDetails());
        $writer->writeObjectValue('sessionMetadata', $this->getSessionMetadata());
    }

    /**
     * Sets the enforcementType property value. The enforcementType property
     * @param EnforcementType|null $value Value to set for the enforcementType property.
    */
    public function setEnforcementType(?EnforcementType $value): void {
        $this->getBackingStore()->set('enforcementType', $value);
    }

    /**
     * Sets the evaluationSource property value. The evaluationSource property
     * @param string|null $value Value to set for the evaluationSource property.
    */
    public function setEvaluationSource(?string $value): void {
        $this->getBackingStore()->set('evaluationSource', $value);
    }

    /**
     * Sets the exceptionInfo property value. The exceptionInfo property
     * @param ExceptionInfo|null $value Value to set for the exceptionInfo property.
    */
    public function setExceptionInfo(?ExceptionInfo $value): void {
        $this->getBackingStore()->set('exceptionInfo', $value);
    }

    /**
     * Sets the incidentId property value. The incidentId property
     * @param string|null $value Value to set for the incidentId property.
    */
    public function setIncidentId(?string $value): void {
        $this->getBackingStore()->set('incidentId', $value);
    }

    /**
     * Sets the isSensitiveInfoDetectionIsIncluded property value. The isSensitiveInfoDetectionIsIncluded property
     * @param bool|null $value Value to set for the isSensitiveInfoDetectionIsIncluded property.
    */
    public function setIsSensitiveInfoDetectionIsIncluded(?bool $value): void {
        $this->getBackingStore()->set('isSensitiveInfoDetectionIsIncluded', $value);
    }

    /**
     * Sets the location property value. The location property
     * @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the policyDetails property value. The policyDetails property
     * @param array<string>|null $value Value to set for the policyDetails property.
    */
    public function setPolicyDetails(?array $value): void {
        $this->getBackingStore()->set('policyDetails', $value);
    }

    /**
     * Sets the remediationDetails property value. The remediationDetails property
     * @param RemediationInfo|null $value Value to set for the remediationDetails property.
    */
    public function setRemediationDetails(?RemediationInfo $value): void {
        $this->getBackingStore()->set('remediationDetails', $value);
    }

    /**
     * Sets the sessionMetadata property value. The sessionMetadata property
     * @param SessionMetadataInfo|null $value Value to set for the sessionMetadata property.
    */
    public function setSessionMetadata(?SessionMetadataInfo $value): void {
        $this->getBackingStore()->set('sessionMetadata', $value);
    }

}
