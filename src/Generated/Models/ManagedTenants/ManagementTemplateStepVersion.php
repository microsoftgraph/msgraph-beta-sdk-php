<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ManagementTemplateStepVersion extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagementTemplateStepVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('acceptedFor');
        if (is_null($val) || $val instanceof ManagementTemplateStep) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acceptedFor'");
    }

    /**
     * Gets the contentMarkdown property value. The contentMarkdown property
     * @return string|null
    */
    public function getContentMarkdown(): ?string {
        $val = $this->getBackingStore()->get('contentMarkdown');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentMarkdown'");
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        $val = $this->getBackingStore()->get('createdByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByUserId'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
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
     * Gets the deployments property value. The deployments property
     * @return array<ManagementTemplateStepDeployment>|null
    */
    public function getDeployments(): ?array {
        $val = $this->getBackingStore()->get('deployments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagementTemplateStepDeployment::class);
            /** @var array<ManagementTemplateStepDeployment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedFor' => fn(ParseNode $n) => $o->setAcceptedFor($n->getObjectValue([ManagementTemplateStep::class, 'createFromDiscriminatorValue'])),
            'contentMarkdown' => fn(ParseNode $n) => $o->setContentMarkdown($n->getStringValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deployments' => fn(ParseNode $n) => $o->setDeployments($n->getCollectionOfObjectValues([ManagementTemplateStepDeployment::class, 'createFromDiscriminatorValue'])),
            'lastActionByUserId' => fn(ParseNode $n) => $o->setLastActionByUserId($n->getStringValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'templateStep' => fn(ParseNode $n) => $o->setTemplateStep($n->getObjectValue([ManagementTemplateStep::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
            'versionInformation' => fn(ParseNode $n) => $o->setVersionInformation($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        $val = $this->getBackingStore()->get('lastActionByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionByUserId'");
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionDateTime'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the templateStep property value. The templateStep property
     * @return ManagementTemplateStep|null
    */
    public function getTemplateStep(): ?ManagementTemplateStep {
        $val = $this->getBackingStore()->get('templateStep');
        if (is_null($val) || $val instanceof ManagementTemplateStep) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateStep'");
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
     * Gets the versionInformation property value. The versionInformation property
     * @return string|null
    */
    public function getVersionInformation(): ?string {
        $val = $this->getBackingStore()->get('versionInformation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionInformation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('acceptedFor', $this->getAcceptedFor());
        $writer->writeStringValue('contentMarkdown', $this->getContentMarkdown());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('deployments', $this->getDeployments());
        $writer->writeStringValue('lastActionByUserId', $this->getLastActionByUserId());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('templateStep', $this->getTemplateStep());
        $writer->writeIntegerValue('version', $this->getVersion());
        $writer->writeStringValue('versionInformation', $this->getVersionInformation());
    }

    /**
     * Sets the acceptedFor property value. The acceptedFor property
     * @param ManagementTemplateStep|null $value Value to set for the acceptedFor property.
    */
    public function setAcceptedFor(?ManagementTemplateStep $value): void {
        $this->getBackingStore()->set('acceptedFor', $value);
    }

    /**
     * Sets the contentMarkdown property value. The contentMarkdown property
     * @param string|null $value Value to set for the contentMarkdown property.
    */
    public function setContentMarkdown(?string $value): void {
        $this->getBackingStore()->set('contentMarkdown', $value);
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     * @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->getBackingStore()->set('createdByUserId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deployments property value. The deployments property
     * @param array<ManagementTemplateStepDeployment>|null $value Value to set for the deployments property.
    */
    public function setDeployments(?array $value): void {
        $this->getBackingStore()->set('deployments', $value);
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     * @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value): void {
        $this->getBackingStore()->set('lastActionByUserId', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     * @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the templateStep property value. The templateStep property
     * @param ManagementTemplateStep|null $value Value to set for the templateStep property.
    */
    public function setTemplateStep(?ManagementTemplateStep $value): void {
        $this->getBackingStore()->set('templateStep', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the versionInformation property value. The versionInformation property
     * @param string|null $value Value to set for the versionInformation property.
    */
    public function setVersionInformation(?string $value): void {
        $this->getBackingStore()->set('versionInformation', $value);
    }

}
