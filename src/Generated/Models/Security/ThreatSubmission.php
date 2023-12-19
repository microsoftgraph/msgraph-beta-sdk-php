<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThreatSubmission extends Entity implements Parsable 
{
    /**
     * Instantiates a new threatSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatSubmission {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.emailContentThreatSubmission': return new EmailContentThreatSubmission();
                case '#microsoft.graph.security.emailThreatSubmission': return new EmailThreatSubmission();
                case '#microsoft.graph.security.emailUrlThreatSubmission': return new EmailUrlThreatSubmission();
                case '#microsoft.graph.security.fileContentThreatSubmission': return new FileContentThreatSubmission();
                case '#microsoft.graph.security.fileThreatSubmission': return new FileThreatSubmission();
                case '#microsoft.graph.security.fileUrlThreatSubmission': return new FileUrlThreatSubmission();
                case '#microsoft.graph.security.urlThreatSubmission': return new UrlThreatSubmission();
            }
        }
        return new ThreatSubmission();
    }

    /**
     * Gets the adminReview property value. Specifies the admin review property that constitutes of who reviewed the user submission, when and what was it identified as.
     * @return SubmissionAdminReview|null
    */
    public function getAdminReview(): ?SubmissionAdminReview {
        $val = $this->getBackingStore()->get('adminReview');
        if (is_null($val) || $val instanceof SubmissionAdminReview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminReview'");
    }

    /**
     * Gets the category property value. The category property
     * @return SubmissionCategory|null
    */
    public function getCategory(): ?SubmissionCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof SubmissionCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the clientSource property value. Specifies the source of the submission. The possible values are: microsoft,  other and unkownFutureValue.
     * @return ThreatSubmission_clientSource|null
    */
    public function getClientSource(): ?ThreatSubmission_clientSource {
        $val = $this->getBackingStore()->get('clientSource');
        if (is_null($val) || $val instanceof ThreatSubmission_clientSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientSource'");
    }

    /**
     * Gets the contentType property value. Specifies the type of content being submitted. The possible values are: email, url, file, app and unkownFutureValue.
     * @return ThreatSubmission_contentType|null
    */
    public function getContentType(): ?ThreatSubmission_contentType {
        $val = $this->getBackingStore()->get('contentType');
        if (is_null($val) || $val instanceof ThreatSubmission_contentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentType'");
    }

    /**
     * Gets the createdBy property value. Specifies who submitted the email as a threat. Supports $filter = createdBy/email eq 'value'.
     * @return SubmissionUserIdentity|null
    */
    public function getCreatedBy(): ?SubmissionUserIdentity {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof SubmissionUserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Specifies when the threat submission was created. Supports $filter = createdDateTime ge 2022-01-01T00:00:00Z and createdDateTime lt 2022-01-02T00:00:00Z.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'adminReview' => fn(ParseNode $n) => $o->setAdminReview($n->getObjectValue([SubmissionAdminReview::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(SubmissionCategory::class)),
            'clientSource' => fn(ParseNode $n) => $o->setClientSource($n->getEnumValue(ThreatSubmission_clientSource::class)),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getEnumValue(ThreatSubmission_contentType::class)),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([SubmissionUserIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'result' => fn(ParseNode $n) => $o->setResult($n->getObjectValue([SubmissionResult::class, 'createFromDiscriminatorValue'])),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(ThreatSubmission_source::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ThreatSubmission_status::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the result property value. Specifies the result of the analysis performed by Microsoft.
     * @return SubmissionResult|null
    */
    public function getResult(): ?SubmissionResult {
        $val = $this->getBackingStore()->get('result');
        if (is_null($val) || $val instanceof SubmissionResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'result'");
    }

    /**
     * Gets the source property value. Specifies the role of the submitter. Supports $filter = source eq 'value'. The possible values are: administrator,  user and unkownFutureValue.
     * @return ThreatSubmission_source|null
    */
    public function getSource(): ?ThreatSubmission_source {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof ThreatSubmission_source) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the status property value. Indicates whether the threat submission has been analyzed by Microsoft. Supports $filter = status eq 'value'. The possible values are: notStarted, running, succeeded, failed, skipped and unkownFutureValue.
     * @return ThreatSubmission_status|null
    */
    public function getStatus(): ?ThreatSubmission_status {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ThreatSubmission_status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tenantId property value. Indicates the tenant id of the submitter. Not required when created using a POST operation. It's extracted from the token of the post API call.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('adminReview', $this->getAdminReview());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeEnumValue('clientSource', $this->getClientSource());
        $writer->writeEnumValue('contentType', $this->getContentType());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('result', $this->getResult());
        $writer->writeEnumValue('source', $this->getSource());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the adminReview property value. Specifies the admin review property that constitutes of who reviewed the user submission, when and what was it identified as.
     * @param SubmissionAdminReview|null $value Value to set for the adminReview property.
    */
    public function setAdminReview(?SubmissionAdminReview $value): void {
        $this->getBackingStore()->set('adminReview', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param SubmissionCategory|null $value Value to set for the category property.
    */
    public function setCategory(?SubmissionCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the clientSource property value. Specifies the source of the submission. The possible values are: microsoft,  other and unkownFutureValue.
     * @param ThreatSubmission_clientSource|null $value Value to set for the clientSource property.
    */
    public function setClientSource(?ThreatSubmission_clientSource $value): void {
        $this->getBackingStore()->set('clientSource', $value);
    }

    /**
     * Sets the contentType property value. Specifies the type of content being submitted. The possible values are: email, url, file, app and unkownFutureValue.
     * @param ThreatSubmission_contentType|null $value Value to set for the contentType property.
    */
    public function setContentType(?ThreatSubmission_contentType $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the createdBy property value. Specifies who submitted the email as a threat. Supports $filter = createdBy/email eq 'value'.
     * @param SubmissionUserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?SubmissionUserIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Specifies when the threat submission was created. Supports $filter = createdDateTime ge 2022-01-01T00:00:00Z and createdDateTime lt 2022-01-02T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the result property value. Specifies the result of the analysis performed by Microsoft.
     * @param SubmissionResult|null $value Value to set for the result property.
    */
    public function setResult(?SubmissionResult $value): void {
        $this->getBackingStore()->set('result', $value);
    }

    /**
     * Sets the source property value. Specifies the role of the submitter. Supports $filter = source eq 'value'. The possible values are: administrator,  user and unkownFutureValue.
     * @param ThreatSubmission_source|null $value Value to set for the source property.
    */
    public function setSource(?ThreatSubmission_source $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the status property value. Indicates whether the threat submission has been analyzed by Microsoft. Supports $filter = status eq 'value'. The possible values are: notStarted, running, succeeded, failed, skipped and unkownFutureValue.
     * @param ThreatSubmission_status|null $value Value to set for the status property.
    */
    public function setStatus(?ThreatSubmission_status $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tenantId property value. Indicates the tenant id of the submitter. Not required when created using a POST operation. It's extracted from the token of the post API call.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
