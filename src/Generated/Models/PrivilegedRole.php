<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedRole extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<PrivilegedRoleAssignment>|null $assignments The assignments for this role. Read-only. Nullable.
    */
    private ?array $assignments = null;
    
    /**
     * @var string|null $name Role name.
    */
    private ?string $name = null;
    
    /**
     * @var PrivilegedRoleSettings|null $settings The settings for this role. Read-only. Nullable.
    */
    private ?PrivilegedRoleSettings $settings = null;
    
    /**
     * @var PrivilegedRoleSummary|null $summary The summary information for this role. Read-only. Nullable.
    */
    private ?PrivilegedRoleSummary $summary = null;
    
    /**
     * Instantiates a new privilegedRole and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedRole
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedRole {
        return new PrivilegedRole();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignments property value. The assignments for this role. Read-only. Nullable.
     * @return array<PrivilegedRoleAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(PrivilegedRoleAssignment::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(PrivilegedRoleSettings::class, 'createFromDiscriminatorValue'))); },
            'summary' => function (ParseNode $n) use ($o) { $o->setSummary($n->getObjectValue(array(PrivilegedRoleSummary::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the name property value. Role name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the settings property value. The settings for this role. Read-only. Nullable.
     * @return PrivilegedRoleSettings|null
    */
    public function getSettings(): ?PrivilegedRoleSettings {
        return $this->settings;
    }

    /**
     * Gets the summary property value. The summary information for this role. Read-only. Nullable.
     * @return PrivilegedRoleSummary|null
    */
    public function getSummary(): ?PrivilegedRoleSummary {
        return $this->summary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeObjectValue('summary', $this->summary);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the assignments property value. The assignments for this role. Read-only. Nullable.
     *  @param array<PrivilegedRoleAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the name property value. Role name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the settings property value. The settings for this role. Read-only. Nullable.
     *  @param PrivilegedRoleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?PrivilegedRoleSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the summary property value. The summary information for this role. Read-only. Nullable.
     *  @param PrivilegedRoleSummary|null $value Value to set for the summary property.
    */
    public function setSummary(?PrivilegedRoleSummary $value ): void {
        $this->summary = $value;
    }

}
