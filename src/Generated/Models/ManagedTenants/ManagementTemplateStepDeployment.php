<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateStepDeployment extends Entity implements Parsable 
{
    /**
     * @var string|null $createdByUserId The createdByUserId property
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var GraphAPIErrorDetails|null $error The error property
    */
    private ?GraphAPIErrorDetails $error = null;
    
    /**
     * @var string|null $lastActionByUserId The lastActionByUserId property
    */
    private ?string $lastActionByUserId = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The lastActionDateTime property
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var ManagementTemplateDeploymentStatus|null $status The status property
    */
    private ?ManagementTemplateDeploymentStatus $status = null;
    
    /**
     * @var ManagementTemplateStepVersion|null $templateStepVersion The templateStepVersion property
    */
    private ?ManagementTemplateStepVersion $templateStepVersion = null;
    
    /**
     * @var string|null $tenantId The tenantId property
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new managementTemplateStepDeployment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplateStepDeployment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateStepDeployment {
        return new ManagementTemplateStepDeployment();
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the error property value. The error property
     * @return GraphAPIErrorDetails|null
    */
    public function getError(): ?GraphAPIErrorDetails {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdByUserId' => function (ParseNode $n) use ($o) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(GraphAPIErrorDetails::class, 'createFromDiscriminatorValue'))); },
            'lastActionByUserId' => function (ParseNode $n) use ($o) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (ParseNode $n) use ($o) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ManagementTemplateDeploymentStatus::class)); },
            'templateStepVersion' => function (ParseNode $n) use ($o) { $o->setTemplateStepVersion($n->getObjectValue(array(ManagementTemplateStepVersion::class, 'createFromDiscriminatorValue'))); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->lastActionByUserId;
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the status property value. The status property
     * @return ManagementTemplateDeploymentStatus|null
    */
    public function getStatus(): ?ManagementTemplateDeploymentStatus {
        return $this->status;
    }

    /**
     * Gets the templateStepVersion property value. The templateStepVersion property
     * @return ManagementTemplateStepVersion|null
    */
    public function getTemplateStepVersion(): ?ManagementTemplateStepVersion {
        return $this->templateStepVersion;
    }

    /**
     * Gets the tenantId property value. The tenantId property
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
        $writer->writeStringValue('createdByUserId', $this->createdByUserId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeObjectValue('templateStepVersion', $this->templateStepVersion);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value ): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the error property value. The error property
     *  @param GraphAPIErrorDetails|null $value Value to set for the error property.
    */
    public function setError(?GraphAPIErrorDetails $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value ): void {
        $this->lastActionByUserId = $value;
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param ManagementTemplateDeploymentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ManagementTemplateDeploymentStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the templateStepVersion property value. The templateStepVersion property
     *  @param ManagementTemplateStepVersion|null $value Value to set for the templateStepVersion property.
    */
    public function setTemplateStepVersion(?ManagementTemplateStepVersion $value ): void {
        $this->templateStepVersion = $value;
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
