<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateStepVersion extends Entity 
{
    /** @var ManagementTemplateStep|null $acceptedFor  */
    private ?ManagementTemplateStep $acceptedFor = null;
    
    /** @var string|null $contentMarkdown  */
    private ?string $contentMarkdown = null;
    
    /** @var string|null $createdByUserId  */
    private ?string $createdByUserId = null;
    
    /** @var DateTime|null $createdDateTime  */
    private ?DateTime $createdDateTime = null;
    
    /** @var array<ManagementTemplateStepDeployment>|null $deployments  */
    private ?array $deployments = null;
    
    /** @var string|null $lastActionByUserId  */
    private ?string $lastActionByUserId = null;
    
    /** @var DateTime|null $lastActionDateTime  */
    private ?DateTime $lastActionDateTime = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var ManagementTemplateStep|null $templateStep  */
    private ?ManagementTemplateStep $templateStep = null;
    
    /** @var int|null $version  */
    private ?int $version = null;
    
    /** @var string|null $versionInformation  */
    private ?string $versionInformation = null;
    
    /**
     * Instantiates a new managementTemplateStepVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplateStepVersion
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateStepVersion {
        return new ManagementTemplateStepVersion();
    }

    /**
     * Gets the acceptedFor property value. 
     * @return ManagementTemplateStep|null
    */
    public function getAcceptedFor(): ?ManagementTemplateStep {
        return $this->acceptedFor;
    }

    /**
     * Gets the contentMarkdown property value. 
     * @return string|null
    */
    public function getContentMarkdown(): ?string {
        return $this->contentMarkdown;
    }

    /**
     * Gets the createdByUserId property value. 
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the createdDateTime property value. 
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deployments property value. 
     * @return array<ManagementTemplateStepDeployment>|null
    */
    public function getDeployments(): ?array {
        return $this->deployments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedFor' => function (self $o, ParseNode $n) { $o->setAcceptedFor($n->getObjectValue(ManagementTemplateStep::class)); },
            'contentMarkdown' => function (self $o, ParseNode $n) { $o->setContentMarkdown($n->getStringValue()); },
            'createdByUserId' => function (self $o, ParseNode $n) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deployments' => function (self $o, ParseNode $n) { $o->setDeployments($n->getCollectionOfObjectValues(ManagementTemplateStepDeployment::class)); },
            'lastActionByUserId' => function (self $o, ParseNode $n) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (self $o, ParseNode $n) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'templateStep' => function (self $o, ParseNode $n) { $o->setTemplateStep($n->getObjectValue(ManagementTemplateStep::class)); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getIntegerValue()); },
            'versionInformation' => function (self $o, ParseNode $n) { $o->setVersionInformation($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. 
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->lastActionByUserId;
    }

    /**
     * Gets the lastActionDateTime property value. 
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the templateStep property value. 
     * @return ManagementTemplateStep|null
    */
    public function getTemplateStep(): ?ManagementTemplateStep {
        return $this->templateStep;
    }

    /**
     * Gets the version property value. 
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Gets the versionInformation property value. 
     * @return string|null
    */
    public function getVersionInformation(): ?string {
        return $this->versionInformation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('acceptedFor', $this->acceptedFor);
        $writer->writeStringValue('contentMarkdown', $this->contentMarkdown);
        $writer->writeStringValue('createdByUserId', $this->createdByUserId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('deployments', $this->deployments);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('templateStep', $this->templateStep);
        $writer->writeIntegerValue('version', $this->version);
        $writer->writeStringValue('versionInformation', $this->versionInformation);
    }

    /**
     * Sets the acceptedFor property value. 
     *  @param ManagementTemplateStep|null $value Value to set for the acceptedFor property.
    */
    public function setAcceptedFor(?ManagementTemplateStep $value ): void {
        $this->acceptedFor = $value;
    }

    /**
     * Sets the contentMarkdown property value. 
     *  @param string|null $value Value to set for the contentMarkdown property.
    */
    public function setContentMarkdown(?string $value ): void {
        $this->contentMarkdown = $value;
    }

    /**
     * Sets the createdByUserId property value. 
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value ): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the createdDateTime property value. 
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deployments property value. 
     *  @param array<ManagementTemplateStepDeployment>|null $value Value to set for the deployments property.
    */
    public function setDeployments(?array $value ): void {
        $this->deployments = $value;
    }

    /**
     * Sets the lastActionByUserId property value. 
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value ): void {
        $this->lastActionByUserId = $value;
    }

    /**
     * Sets the lastActionDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the templateStep property value. 
     *  @param ManagementTemplateStep|null $value Value to set for the templateStep property.
    */
    public function setTemplateStep(?ManagementTemplateStep $value ): void {
        $this->templateStep = $value;
    }

    /**
     * Sets the version property value. 
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

    /**
     * Sets the versionInformation property value. 
     *  @param string|null $value Value to set for the versionInformation property.
    */
    public function setVersionInformation(?string $value ): void {
        $this->versionInformation = $value;
    }

}
