<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagementTemplateStep;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagementTemplateStepDeployment;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateStepVersion extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var ManagementTemplateStep|null $acceptedFor The acceptedFor property
    */
    private ?ManagementTemplateStep $acceptedFor = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $contentMarkdown The contentMarkdown property
    */
    private ?string $contentMarkdown = null;
    
    /**
     * @var string|null $createdByUserId The createdByUserId property
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<ManagementTemplateStepDeployment>|null $deployments The deployments property
    */
    private ?array $deployments = null;
    
    /**
     * @var string|null $lastActionByUserId The lastActionByUserId property
    */
    private ?string $lastActionByUserId = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The lastActionDateTime property
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var ManagementTemplateStep|null $templateStep The templateStep property
    */
    private ?ManagementTemplateStep $templateStep = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * @var string|null $versionInformation The versionInformation property
    */
    private ?string $versionInformation = null;
    
    /**
     * Instantiates a new ManagementTemplateStepVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplateStepVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateStepVersion {
        return new ManagementTemplateStepVersion();
    }

    /**
     * Gets the acceptedFor property value. The acceptedFor property
     * @return ManagementTemplateStep|null
    */
    public function getAcceptedFor(): ?ManagementTemplateStep {
        return $this->acceptedFor;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentMarkdown property value. The contentMarkdown property
     * @return string|null
    */
    public function getContentMarkdown(): ?string {
        return $this->contentMarkdown;
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
     * Gets the deployments property value. The deployments property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedFor' => function (ParseNode $n) use ($o) { $o->setAcceptedFor($n->getObjectValue(array(ManagementTemplateStep::class, 'createFromDiscriminatorValue'))); },
            'contentMarkdown' => function (ParseNode $n) use ($o) { $o->setContentMarkdown($n->getStringValue()); },
            'createdByUserId' => function (ParseNode $n) use ($o) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deployments' => function (ParseNode $n) use ($o) { $o->setDeployments($n->getCollectionOfObjectValues(array(ManagementTemplateStepDeployment::class, 'createFromDiscriminatorValue'))); },
            'lastActionByUserId' => function (ParseNode $n) use ($o) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (ParseNode $n) use ($o) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'templateStep' => function (ParseNode $n) use ($o) { $o->setTemplateStep($n->getObjectValue(array(ManagementTemplateStep::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
            'versionInformation' => function (ParseNode $n) use ($o) { $o->setVersionInformation($n->getStringValue()); },
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
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the templateStep property value. The templateStep property
     * @return ManagementTemplateStep|null
    */
    public function getTemplateStep(): ?ManagementTemplateStep {
        return $this->templateStep;
    }

    /**
     * Gets the version property value. The version property
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Gets the versionInformation property value. The versionInformation property
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acceptedFor property value. The acceptedFor property
     *  @param ManagementTemplateStep|null $value Value to set for the acceptedFor property.
    */
    public function setAcceptedFor(?ManagementTemplateStep $value ): void {
        $this->acceptedFor = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the contentMarkdown property value. The contentMarkdown property
     *  @param string|null $value Value to set for the contentMarkdown property.
    */
    public function setContentMarkdown(?string $value ): void {
        $this->contentMarkdown = $value;
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
     * Sets the deployments property value. The deployments property
     *  @param array<ManagementTemplateStepDeployment>|null $value Value to set for the deployments property.
    */
    public function setDeployments(?array $value ): void {
        $this->deployments = $value;
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
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the templateStep property value. The templateStep property
     *  @param ManagementTemplateStep|null $value Value to set for the templateStep property.
    */
    public function setTemplateStep(?ManagementTemplateStep $value ): void {
        $this->templateStep = $value;
    }

    /**
     * Sets the version property value. The version property
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

    /**
     * Sets the versionInformation property value. The versionInformation property
     *  @param string|null $value Value to set for the versionInformation property.
    */
    public function setVersionInformation(?string $value ): void {
        $this->versionInformation = $value;
    }

}
