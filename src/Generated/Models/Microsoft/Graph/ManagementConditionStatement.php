<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementConditionStatement extends Entity 
{
    /** @var array<DevicePlatformType>|null $applicablePlatforms The applicable platforms for this management condition statement. */
    private ?array $applicablePlatforms = null;
    
    /** @var DateTime|null $createdDateTime The time the management condition statement was created. Generated service side. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description The admin defined description of the management condition statement. */
    private ?string $description = null;
    
    /** @var string|null $displayName The admin defined name of the management condition statement. */
    private ?string $displayName = null;
    
    /** @var string|null $eTag ETag of the management condition statement. Updated service side. */
    private ?string $eTag = null;
    
    /** @var ManagementConditionExpression|null $expression The management condition statement expression used to evaluate if a management condition statement was activated/deactivated. */
    private ?ManagementConditionExpression $expression = null;
    
    /** @var array<ManagementCondition>|null $managementConditions The management conditions associated to the management condition statement. */
    private ?array $managementConditions = null;
    
    /** @var DateTime|null $modifiedDateTime The time the management condition statement was last modified. Updated service side. */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * Instantiates a new managementConditionStatement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementConditionStatement
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementConditionStatement {
        return new ManagementConditionStatement();
    }

    /**
     * Gets the applicablePlatforms property value. The applicable platforms for this management condition statement.
     * @return array<DevicePlatformType>|null
    */
    public function getApplicablePlatforms(): ?array {
        return $this->applicablePlatforms;
    }

    /**
     * Gets the createdDateTime property value. The time the management condition statement was created. Generated service side.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The admin defined description of the management condition statement.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The admin defined name of the management condition statement.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the eTag property value. ETag of the management condition statement. Updated service side.
     * @return string|null
    */
    public function getETag(): ?string {
        return $this->eTag;
    }

    /**
     * Gets the expression property value. The management condition statement expression used to evaluate if a management condition statement was activated/deactivated.
     * @return ManagementConditionExpression|null
    */
    public function getExpression(): ?ManagementConditionExpression {
        return $this->expression;
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
            'expression' => function (self $o, ParseNode $n) { $o->setExpression($n->getObjectValue(ManagementConditionExpression::class)); },
            'managementConditions' => function (self $o, ParseNode $n) { $o->setManagementConditions($n->getCollectionOfObjectValues(ManagementCondition::class)); },
            'modifiedDateTime' => function (self $o, ParseNode $n) { $o->setModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the managementConditions property value. The management conditions associated to the management condition statement.
     * @return array<ManagementCondition>|null
    */
    public function getManagementConditions(): ?array {
        return $this->managementConditions;
    }

    /**
     * Gets the modifiedDateTime property value. The time the management condition statement was last modified. Updated service side.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
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
        $writer->writeObjectValue('expression', $this->expression);
        $writer->writeCollectionOfObjectValues('managementConditions', $this->managementConditions);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
    }

    /**
     * Sets the applicablePlatforms property value. The applicable platforms for this management condition statement.
     *  @param array<DevicePlatformType>|null $value Value to set for the applicablePlatforms property.
    */
    public function setApplicablePlatforms(?array $value ): void {
        $this->applicablePlatforms = $value;
    }

    /**
     * Sets the createdDateTime property value. The time the management condition statement was created. Generated service side.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The admin defined description of the management condition statement.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The admin defined name of the management condition statement.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the eTag property value. ETag of the management condition statement. Updated service side.
     *  @param string|null $value Value to set for the eTag property.
    */
    public function setETag(?string $value ): void {
        $this->eTag = $value;
    }

    /**
     * Sets the expression property value. The management condition statement expression used to evaluate if a management condition statement was activated/deactivated.
     *  @param ManagementConditionExpression|null $value Value to set for the expression property.
    */
    public function setExpression(?ManagementConditionExpression $value ): void {
        $this->expression = $value;
    }

    /**
     * Sets the managementConditions property value. The management conditions associated to the management condition statement.
     *  @param array<ManagementCondition>|null $value Value to set for the managementConditions property.
    */
    public function setManagementConditions(?array $value ): void {
        $this->managementConditions = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The time the management condition statement was last modified. Updated service side.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

}
