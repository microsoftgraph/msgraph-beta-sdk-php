<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ThreatAssessmentRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new threatAssessmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatAssessmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatAssessmentRequest {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.emailFileAssessmentRequest': return new EmailFileAssessmentRequest();
                case '#microsoft.graph.fileAssessmentRequest': return new FileAssessmentRequest();
                case '#microsoft.graph.mailAssessmentRequest': return new MailAssessmentRequest();
                case '#microsoft.graph.urlAssessmentRequest': return new UrlAssessmentRequest();
            }
        }
        return new ThreatAssessmentRequest();
    }

    /**
     * Gets the category property value. The category property
     * @return ThreatCategory|null
    */
    public function getCategory(): ?ThreatCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof ThreatCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the contentType property value. The content type of threat assessment. Possible values are: mail, url, file.
     * @return ThreatAssessmentRequest_contentType|null
    */
    public function getContentType(): ?ThreatAssessmentRequest_contentType {
        $val = $this->getBackingStore()->get('contentType');
        if (is_null($val) || $val instanceof ThreatAssessmentRequest_contentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentType'");
    }

    /**
     * Gets the createdBy property value. The threat assessment request creator.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the expectedAssessment property value. The expectedAssessment property
     * @return ThreatExpectedAssessment|null
    */
    public function getExpectedAssessment(): ?ThreatExpectedAssessment {
        $val = $this->getBackingStore()->get('expectedAssessment');
        if (is_null($val) || $val instanceof ThreatExpectedAssessment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expectedAssessment'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(ThreatCategory::class)),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getEnumValue(ThreatAssessmentRequest_contentType::class)),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'expectedAssessment' => fn(ParseNode $n) => $o->setExpectedAssessment($n->getEnumValue(ThreatExpectedAssessment::class)),
            'requestSource' => fn(ParseNode $n) => $o->setRequestSource($n->getEnumValue(ThreatAssessmentRequest_requestSource::class)),
            'results' => fn(ParseNode $n) => $o->setResults($n->getCollectionOfObjectValues([ThreatAssessmentResult::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ThreatAssessmentRequest_status::class)),
        ]);
    }

    /**
     * Gets the requestSource property value. The source of the threat assessment request. Possible values are: user, administrator.
     * @return ThreatAssessmentRequest_requestSource|null
    */
    public function getRequestSource(): ?ThreatAssessmentRequest_requestSource {
        $val = $this->getBackingStore()->get('requestSource');
        if (is_null($val) || $val instanceof ThreatAssessmentRequest_requestSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestSource'");
    }

    /**
     * Gets the results property value. A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
     * @return array<ThreatAssessmentResult>|null
    */
    public function getResults(): ?array {
        $val = $this->getBackingStore()->get('results');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ThreatAssessmentResult::class);
            /** @var array<ThreatAssessmentResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'results'");
    }

    /**
     * Gets the status property value. The assessment process status. Possible values are: pending, completed.
     * @return ThreatAssessmentRequest_status|null
    */
    public function getStatus(): ?ThreatAssessmentRequest_status {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ThreatAssessmentRequest_status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeEnumValue('contentType', $this->getContentType());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('expectedAssessment', $this->getExpectedAssessment());
        $writer->writeEnumValue('requestSource', $this->getRequestSource());
        $writer->writeCollectionOfObjectValues('results', $this->getResults());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the category property value. The category property
     * @param ThreatCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ThreatCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the contentType property value. The content type of threat assessment. Possible values are: mail, url, file.
     * @param ThreatAssessmentRequest_contentType|null $value Value to set for the contentType property.
    */
    public function setContentType(?ThreatAssessmentRequest_contentType $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the createdBy property value. The threat assessment request creator.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the expectedAssessment property value. The expectedAssessment property
     * @param ThreatExpectedAssessment|null $value Value to set for the expectedAssessment property.
    */
    public function setExpectedAssessment(?ThreatExpectedAssessment $value): void {
        $this->getBackingStore()->set('expectedAssessment', $value);
    }

    /**
     * Sets the requestSource property value. The source of the threat assessment request. Possible values are: user, administrator.
     * @param ThreatAssessmentRequest_requestSource|null $value Value to set for the requestSource property.
    */
    public function setRequestSource(?ThreatAssessmentRequest_requestSource $value): void {
        $this->getBackingStore()->set('requestSource', $value);
    }

    /**
     * Sets the results property value. A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
     * @param array<ThreatAssessmentResult>|null $value Value to set for the results property.
    */
    public function setResults(?array $value): void {
        $this->getBackingStore()->set('results', $value);
    }

    /**
     * Sets the status property value. The assessment process status. Possible values are: pending, completed.
     * @param ThreatAssessmentRequest_status|null $value Value to set for the status property.
    */
    public function setStatus(?ThreatAssessmentRequest_status $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
