<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContinuousAccessEvaluationPolicy extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description Continuous access evaluation automatically blocks access to resources and applications in near real time when a user's access is removed or a client IP address changes. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The value is always Continuous Access Evaluation. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<string>|null $groups The collection of group identifiers in scope for evaluation. All groups are in scope when the collection is empty. Read-only.
    */
    private ?array $groups = null;
    
    /**
     * @var bool|null $isEnabled true to indicate whether continuous access evaluation should be performed; otherwise false. Read-only.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var bool|null $migrate true to indicate that the continuous access evaluation policy settings should be or has been migrated to the conditional access policy.
    */
    private ?bool $migrate = null;
    
    /**
     * @var array<string>|null $users The collection of user identifiers in scope for evaluation. All users are in scope when the collection is empty. Read-only.
    */
    private ?array $users = null;
    
    /**
     * Instantiates a new ContinuousAccessEvaluationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContinuousAccessEvaluationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContinuousAccessEvaluationPolicy {
        return new ContinuousAccessEvaluationPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Continuous access evaluation automatically blocks access to resources and applications in near real time when a user's access is removed or a client IP address changes. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The value is always Continuous Access Evaluation. Read-only.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'groups' => function (ParseNode $n) use ($o) { $o->setGroups($n->getCollectionOfPrimitiveValues()); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'migrate' => function (ParseNode $n) use ($o) { $o->setMigrate($n->getBooleanValue()); },
            'users' => function (ParseNode $n) use ($o) { $o->setUsers($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the groups property value. The collection of group identifiers in scope for evaluation. All groups are in scope when the collection is empty. Read-only.
     * @return array<string>|null
    */
    public function getGroups(): ?array {
        return $this->groups;
    }

    /**
     * Gets the isEnabled property value. true to indicate whether continuous access evaluation should be performed; otherwise false. Read-only.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the migrate property value. true to indicate that the continuous access evaluation policy settings should be or has been migrated to the conditional access policy.
     * @return bool|null
    */
    public function getMigrate(): ?bool {
        return $this->migrate;
    }

    /**
     * Gets the users property value. The collection of user identifiers in scope for evaluation. All users are in scope when the collection is empty. Read-only.
     * @return array<string>|null
    */
    public function getUsers(): ?array {
        return $this->users;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('groups', $this->groups);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeBooleanValue('migrate', $this->migrate);
        $writer->writeCollectionOfPrimitiveValues('users', $this->users);
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
     * Sets the description property value. Continuous access evaluation automatically blocks access to resources and applications in near real time when a user's access is removed or a client IP address changes. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The value is always Continuous Access Evaluation. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the groups property value. The collection of group identifiers in scope for evaluation. All groups are in scope when the collection is empty. Read-only.
     *  @param array<string>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value ): void {
        $this->groups = $value;
    }

    /**
     * Sets the isEnabled property value. true to indicate whether continuous access evaluation should be performed; otherwise false. Read-only.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the migrate property value. true to indicate that the continuous access evaluation policy settings should be or has been migrated to the conditional access policy.
     *  @param bool|null $value Value to set for the migrate property.
    */
    public function setMigrate(?bool $value ): void {
        $this->migrate = $value;
    }

    /**
     * Sets the users property value. The collection of user identifiers in scope for evaluation. All users are in scope when the collection is empty. Read-only.
     *  @param array<string>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value ): void {
        $this->users = $value;
    }

}
