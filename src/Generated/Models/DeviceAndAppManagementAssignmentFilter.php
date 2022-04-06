<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAndAppManagementAssignmentFilter extends Entity 
{
    /** @var DateTime|null $createdDateTime Creation time of the Assignment Filter. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description Description of the Assignment Filter. */
    private ?string $description = null;
    
    /** @var string|null $displayName DisplayName of the Assignment Filter. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastModifiedDateTime Last modified time of the Assignment Filter. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var DevicePlatformType|null $platform Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown. */
    private ?DevicePlatformType $platform = null;
    
    /** @var array<string>|null $roleScopeTags RoleScopeTags of the Assignment Filter. */
    private ?array $roleScopeTags = null;
    
    /** @var string|null $rule Rule definition of the Assignment Filter. */
    private ?string $rule = null;
    
    /**
     * Instantiates a new deviceAndAppManagementAssignmentFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAndAppManagementAssignmentFilter
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAndAppManagementAssignmentFilter {
        return new DeviceAndAppManagementAssignmentFilter();
    }

    /**
     * Gets the createdDateTime property value. Creation time of the Assignment Filter.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description of the Assignment Filter.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. DisplayName of the Assignment Filter.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'platform' => function (self $o, ParseNode $n) { $o->setPlatform($n->getEnumValue(DevicePlatformType::class)); },
            'roleScopeTags' => function (self $o, ParseNode $n) { $o->setRoleScopeTags($n->getCollectionOfPrimitiveValues()); },
            'rule' => function (self $o, ParseNode $n) { $o->setRule($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified time of the Assignment Filter.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the platform property value. Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
     * @return DevicePlatformType|null
    */
    public function getPlatform(): ?DevicePlatformType {
        return $this->platform;
    }

    /**
     * Gets the roleScopeTags property value. RoleScopeTags of the Assignment Filter.
     * @return array<string>|null
    */
    public function getRoleScopeTags(): ?array {
        return $this->roleScopeTags;
    }

    /**
     * Gets the rule property value. Rule definition of the Assignment Filter.
     * @return string|null
    */
    public function getRule(): ?string {
        return $this->rule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTags', $this->roleScopeTags);
        $writer->writeStringValue('rule', $this->rule);
    }

    /**
     * Sets the createdDateTime property value. Creation time of the Assignment Filter.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description of the Assignment Filter.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. DisplayName of the Assignment Filter.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified time of the Assignment Filter.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the platform property value. Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
     *  @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the roleScopeTags property value. RoleScopeTags of the Assignment Filter.
     *  @param array<string>|null $value Value to set for the roleScopeTags property.
    */
    public function setRoleScopeTags(?array $value ): void {
        $this->roleScopeTags = $value;
    }

    /**
     * Sets the rule property value. Rule definition of the Assignment Filter.
     *  @param string|null $value Value to set for the rule property.
    */
    public function setRule(?string $value ): void {
        $this->rule = $value;
    }

}
