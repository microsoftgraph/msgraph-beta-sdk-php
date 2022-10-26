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
     * @var SubmissionAdminReview|null $adminReview Specifies the admin review property which constitutes of who reviewed the user submission, when and what was it identified as.
    */
    private ?SubmissionAdminReview $adminReview = null;
    
    /**
     * @var SubmissionCategory|null $category The category property
    */
    private ?SubmissionCategory $category = null;
    
    /**
     * @var SubmissionClientSource|null $clientSource Specifies the source of the submission. The possible values are: microsoft,  other and unkownFutureValue.
    */
    private ?SubmissionClientSource $clientSource = null;
    
    /**
     * @var SubmissionContentType|null $contentType Specifies the type of content being submitted. The possible values are: email, url, file, app and unkownFutureValue.
    */
    private ?SubmissionContentType $contentType = null;
    
    /**
     * @var SubmissionUserIdentity|null $createdBy Specifies who submitted the email as a threat. Supports $filter = createdBy/email eq 'value'.
    */
    private ?SubmissionUserIdentity $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime Specifies when the threat submission was created. Supports $filter = createdDateTime ge 2022-01-01T00:00:00Z and createdDateTime lt 2022-01-02T00:00:00Z.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var SubmissionResult|null $result Specifies the result of the analysis performed by Microsoft.
    */
    private ?SubmissionResult $result = null;
    
    /**
     * @var SubmissionSource|null $source Specifies the role of the submitter. Supports $filter = source eq 'value'. The possible values are: administrator,  user and unkownFutureValue.
    */
    private ?SubmissionSource $source = null;
    
    /**
     * @var LongRunningOperationStatus|null $status Indicates whether the threat submission has been analyzed by Microsoft. Supports $filter = status eq 'value'. The possible values are: notStarted, running, succeeded, failed, skipped and unkownFutureValue.
    */
    private ?LongRunningOperationStatus $status = null;
    
    /**
     * @var string|null $tenantId Indicates the tenant id of the submitter. Not required when created using a POST operation. It is extracted from the token of the post API call.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new threatSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.threatSubmission');
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
     * Gets the adminReview property value. Specifies the admin review property which constitutes of who reviewed the user submission, when and what was it identified as.
     * @return SubmissionAdminReview|null
    */
    public function getAdminReview(): ?SubmissionAdminReview {
        return $this->adminReview;
    }

    /**
     * Gets the category property value. The category property
     * @return SubmissionCategory|null
    */
    public function getCategory(): ?SubmissionCategory {
        return $this->category;
    }

    /**
     * Gets the clientSource property value. Specifies the source of the submission. The possible values are: microsoft,  other and unkownFutureValue.
     * @return SubmissionClientSource|null
    */
    public function getClientSource(): ?SubmissionClientSource {
        return $this->clientSource;
    }

    /**
     * Gets the contentType property value. Specifies the type of content being submitted. The possible values are: email, url, file, app and unkownFutureValue.
     * @return SubmissionContentType|null
    */
    public function getContentType(): ?SubmissionContentType {
        return $this->contentType;
    }

    /**
     * Gets the createdBy property value. Specifies who submitted the email as a threat. Supports $filter = createdBy/email eq 'value'.
     * @return SubmissionUserIdentity|null
    */
    public function getCreatedBy(): ?SubmissionUserIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Specifies when the threat submission was created. Supports $filter = createdDateTime ge 2022-01-01T00:00:00Z and createdDateTime lt 2022-01-02T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'adminReview' => fn(ParseNode $n) => $o->setAdminReview($n->getObjectValue([SubmissionAdminReview::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(SubmissionCategory::class)),
            'clientSource' => fn(ParseNode $n) => $o->setClientSource($n->getEnumValue(SubmissionClientSource::class)),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getEnumValue(SubmissionContentType::class)),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([SubmissionUserIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'result' => fn(ParseNode $n) => $o->setResult($n->getObjectValue([SubmissionResult::class, 'createFromDiscriminatorValue'])),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(SubmissionSource::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(LongRunningOperationStatus::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the result property value. Specifies the result of the analysis performed by Microsoft.
     * @return SubmissionResult|null
    */
    public function getResult(): ?SubmissionResult {
        return $this->result;
    }

    /**
     * Gets the source property value. Specifies the role of the submitter. Supports $filter = source eq 'value'. The possible values are: administrator,  user and unkownFutureValue.
     * @return SubmissionSource|null
    */
    public function getSource(): ?SubmissionSource {
        return $this->source;
    }

    /**
     * Gets the status property value. Indicates whether the threat submission has been analyzed by Microsoft. Supports $filter = status eq 'value'. The possible values are: notStarted, running, succeeded, failed, skipped and unkownFutureValue.
     * @return LongRunningOperationStatus|null
    */
    public function getStatus(): ?LongRunningOperationStatus {
        return $this->status;
    }

    /**
     * Gets the tenantId property value. Indicates the tenant id of the submitter. Not required when created using a POST operation. It is extracted from the token of the post API call.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('adminReview', $this->adminReview);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeEnumValue('clientSource', $this->clientSource);
        $writer->writeEnumValue('contentType', $this->contentType);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('result', $this->result);
        $writer->writeEnumValue('source', $this->source);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the adminReview property value. Specifies the admin review property which constitutes of who reviewed the user submission, when and what was it identified as.
     *  @param SubmissionAdminReview|null $value Value to set for the adminReview property.
    */
    public function setAdminReview(?SubmissionAdminReview $value ): void {
        $this->adminReview = $value;
    }

    /**
     * Sets the category property value. The category property
     *  @param SubmissionCategory|null $value Value to set for the category property.
    */
    public function setCategory(?SubmissionCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the clientSource property value. Specifies the source of the submission. The possible values are: microsoft,  other and unkownFutureValue.
     *  @param SubmissionClientSource|null $value Value to set for the clientSource property.
    */
    public function setClientSource(?SubmissionClientSource $value ): void {
        $this->clientSource = $value;
    }

    /**
     * Sets the contentType property value. Specifies the type of content being submitted. The possible values are: email, url, file, app and unkownFutureValue.
     *  @param SubmissionContentType|null $value Value to set for the contentType property.
    */
    public function setContentType(?SubmissionContentType $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the createdBy property value. Specifies who submitted the email as a threat. Supports $filter = createdBy/email eq 'value'.
     *  @param SubmissionUserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?SubmissionUserIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Specifies when the threat submission was created. Supports $filter = createdDateTime ge 2022-01-01T00:00:00Z and createdDateTime lt 2022-01-02T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the result property value. Specifies the result of the analysis performed by Microsoft.
     *  @param SubmissionResult|null $value Value to set for the result property.
    */
    public function setResult(?SubmissionResult $value ): void {
        $this->result = $value;
    }

    /**
     * Sets the source property value. Specifies the role of the submitter. Supports $filter = source eq 'value'. The possible values are: administrator,  user and unkownFutureValue.
     *  @param SubmissionSource|null $value Value to set for the source property.
    */
    public function setSource(?SubmissionSource $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the status property value. Indicates whether the threat submission has been analyzed by Microsoft. Supports $filter = status eq 'value'. The possible values are: notStarted, running, succeeded, failed, skipped and unkownFutureValue.
     *  @param LongRunningOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LongRunningOperationStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the tenantId property value. Indicates the tenant id of the submitter. Not required when created using a POST operation. It is extracted from the token of the post API call.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
