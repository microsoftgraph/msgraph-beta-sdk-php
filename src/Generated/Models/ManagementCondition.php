<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementCondition extends Entity 
{
    /** @var array<DevicePlatformType>|null $applicablePlatforms The applicable platforms for this management condition. */
    private ?array $applicablePlatforms = null;
    
    /** @var DateTime|null $createdDateTime The time the management condition was created. Generated service side. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description The admin defined description of the management condition. */
    private ?string $description = null;
    
    /** @var string|null $displayName The admin defined name of the management condition. */
    private ?string $displayName = null;
    
    /** @var string|null $eTag ETag of the management condition. Updated service side. */
    private ?string $eTag = null;
    
    /** @var array<ManagementConditionStatement>|null $managementConditionStatements The management condition statements associated to the management condition. */
    private ?array $managementConditionStatements = null;
    
    /** @var DateTime|null $modifiedDateTime The time the management condition was last modified. Updated service side. */
    private ?DateTime $modifiedDateTime = null;
    
    /** @var string|null $uniqueName Unique name for the management condition. Used in management condition expressions. */
    private ?string $uniqueName = null;
    
    /**
     * Instantiates a new managementCondition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementCondition
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementCondition {
        return new ManagementCondition();
    }

    /**
     * Gets the applicablePlatforms property value. The applicable platforms for this management condition.
     * @return array<DevicePlatformType>|null
    */
    public function getApplicablePlatforms(): ?array {
        return $this->applicablePlatforms;
    }

    /**
     * Gets the createdDateTime property value. The time the management condition was created. Generated service side.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The admin defined description of the management condition.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The admin defined name of the management condition.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the eTag property value. ETag of the management condition. Updated service side.
     * @return string|null
    */
    public function getETag(): ?string {
        return $this->eTag;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'applicablePlatforms' => function (self $o, ParseNode $n) { $o->setApplicablePlatforms($n->getCollectionOfEnumValues(DevicePlatformType::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'eTag' => function (self $o, ParseNode $n) { $o->setETag($n->getStringValue()); },
            'managementConditionStatements' => function (self $o, ParseNode $n) { $o->setManagementConditionStatements($n->getCollectionOfObjectValues(ManagementConditionStatement::class)); },
            'modifiedDateTime' => function (self $o, ParseNode $n) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'uniqueName' => function (self $o, ParseNode $n) { $o->setUniqueName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the managementConditionStatements property value. The management condition statements associated to the management condition.
     * @return array<ManagementConditionStatement>|null
    */
    public function getManagementConditionStatements(): ?array {
        return $this->managementConditionStatements;
    }

    /**
     * Gets the modifiedDateTime property value. The time the management condition was last modified. Updated service side.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the uniqueName property value. Unique name for the management condition. Used in management condition expressions.
     * @return string|null
    */
    public function getUniqueName(): ?string {
        return $this->uniqueName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('applicablePlatforms', $this->applicablePlatforms);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('eTag', $this->eTag);
        $writer->writeCollectionOfObjectValues('managementConditionStatements', $this->managementConditionStatements);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeStringValue('uniqueName', $this->uniqueName);
    }

    /**
     * Sets the applicablePlatforms property value. The applicable platforms for this management condition.
     *  @param array<DevicePlatformType>|null $value Value to set for the applicablePlatforms property.
    */
    public function setApplicablePlatforms(?array $value ): void {
        $this->applicablePlatforms = $value;
    }

    /**
     * Sets the createdDateTime property value. The time the management condition was created. Generated service side.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The admin defined description of the management condition.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The admin defined name of the management condition.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the eTag property value. ETag of the management condition. Updated service side.
     *  @param string|null $value Value to set for the eTag property.
    */
    public function setETag(?string $value ): void {
        $this->eTag = $value;
    }

    /**
     * Sets the managementConditionStatements property value. The management condition statements associated to the management condition.
     *  @param array<ManagementConditionStatement>|null $value Value to set for the managementConditionStatements property.
    */
    public function setManagementConditionStatements(?array $value ): void {
        $this->managementConditionStatements = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The time the management condition was last modified. Updated service side.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the uniqueName property value. Unique name for the management condition. Used in management condition expressions.
     *  @param string|null $value Value to set for the uniqueName property.
    */
    public function setUniqueName(?string $value ): void {
        $this->uniqueName = $value;
    }

}
