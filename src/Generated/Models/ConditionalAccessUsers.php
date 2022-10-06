<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessUsers implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $excludeGroups Group IDs excluded from scope of policy.
    */
    private ?array $excludeGroups = null;
    
    /**
     * @var ConditionalAccessGuestsOrExternalUsers|null $excludeGuestsOrExternalUsers Internal guests or external users excluded in the policy scope. Optionally populated.
    */
    private ?ConditionalAccessGuestsOrExternalUsers $excludeGuestsOrExternalUsers = null;
    
    /**
     * @var array<string>|null $excludeRoles Role IDs excluded from scope of policy.
    */
    private ?array $excludeRoles = null;
    
    /**
     * @var array<string>|null $excludeUsers User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
    */
    private ?array $excludeUsers = null;
    
    /**
     * @var array<string>|null $includeGroups Group IDs in scope of policy unless explicitly excluded, or All.
    */
    private ?array $includeGroups = null;
    
    /**
     * @var ConditionalAccessGuestsOrExternalUsers|null $includeGuestsOrExternalUsers Internal guests or external users included in the policy scope. Optionally populated.
    */
    private ?ConditionalAccessGuestsOrExternalUsers $includeGuestsOrExternalUsers = null;
    
    /**
     * @var array<string>|null $includeRoles Role IDs in scope of policy unless explicitly excluded, or All.
    */
    private ?array $includeRoles = null;
    
    /**
     * @var array<string>|null $includeUsers User IDs in scope of policy unless explicitly excluded, or None or All or GuestsOrExternalUsers.
    */
    private ?array $includeUsers = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new conditionalAccessUsers and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessUsers');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessUsers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessUsers {
        return new ConditionalAccessUsers();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeGroups property value. Group IDs excluded from scope of policy.
     * @return array<string>|null
    */
    public function getExcludeGroups(): ?array {
        return $this->excludeGroups;
    }

    /**
     * Gets the excludeGuestsOrExternalUsers property value. Internal guests or external users excluded in the policy scope. Optionally populated.
     * @return ConditionalAccessGuestsOrExternalUsers|null
    */
    public function getExcludeGuestsOrExternalUsers(): ?ConditionalAccessGuestsOrExternalUsers {
        return $this->excludeGuestsOrExternalUsers;
    }

    /**
     * Gets the excludeRoles property value. Role IDs excluded from scope of policy.
     * @return array<string>|null
    */
    public function getExcludeRoles(): ?array {
        return $this->excludeRoles;
    }

    /**
     * Gets the excludeUsers property value. User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
     * @return array<string>|null
    */
    public function getExcludeUsers(): ?array {
        return $this->excludeUsers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeGroups' => function (ParseNode $n) use ($o) { $o->setExcludeGroups($n->getCollectionOfPrimitiveValues()); },
            'excludeGuestsOrExternalUsers' => function (ParseNode $n) use ($o) { $o->setExcludeGuestsOrExternalUsers($n->getObjectValue(array(ConditionalAccessGuestsOrExternalUsers::class, 'createFromDiscriminatorValue'))); },
            'excludeRoles' => function (ParseNode $n) use ($o) { $o->setExcludeRoles($n->getCollectionOfPrimitiveValues()); },
            'excludeUsers' => function (ParseNode $n) use ($o) { $o->setExcludeUsers($n->getCollectionOfPrimitiveValues()); },
            'includeGroups' => function (ParseNode $n) use ($o) { $o->setIncludeGroups($n->getCollectionOfPrimitiveValues()); },
            'includeGuestsOrExternalUsers' => function (ParseNode $n) use ($o) { $o->setIncludeGuestsOrExternalUsers($n->getObjectValue(array(ConditionalAccessGuestsOrExternalUsers::class, 'createFromDiscriminatorValue'))); },
            'includeRoles' => function (ParseNode $n) use ($o) { $o->setIncludeRoles($n->getCollectionOfPrimitiveValues()); },
            'includeUsers' => function (ParseNode $n) use ($o) { $o->setIncludeUsers($n->getCollectionOfPrimitiveValues()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the includeGroups property value. Group IDs in scope of policy unless explicitly excluded, or All.
     * @return array<string>|null
    */
    public function getIncludeGroups(): ?array {
        return $this->includeGroups;
    }

    /**
     * Gets the includeGuestsOrExternalUsers property value. Internal guests or external users included in the policy scope. Optionally populated.
     * @return ConditionalAccessGuestsOrExternalUsers|null
    */
    public function getIncludeGuestsOrExternalUsers(): ?ConditionalAccessGuestsOrExternalUsers {
        return $this->includeGuestsOrExternalUsers;
    }

    /**
     * Gets the includeRoles property value. Role IDs in scope of policy unless explicitly excluded, or All.
     * @return array<string>|null
    */
    public function getIncludeRoles(): ?array {
        return $this->includeRoles;
    }

    /**
     * Gets the includeUsers property value. User IDs in scope of policy unless explicitly excluded, or None or All or GuestsOrExternalUsers.
     * @return array<string>|null
    */
    public function getIncludeUsers(): ?array {
        return $this->includeUsers;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeGroups', $this->excludeGroups);
        $writer->writeObjectValue('excludeGuestsOrExternalUsers', $this->excludeGuestsOrExternalUsers);
        $writer->writeCollectionOfPrimitiveValues('excludeRoles', $this->excludeRoles);
        $writer->writeCollectionOfPrimitiveValues('excludeUsers', $this->excludeUsers);
        $writer->writeCollectionOfPrimitiveValues('includeGroups', $this->includeGroups);
        $writer->writeObjectValue('includeGuestsOrExternalUsers', $this->includeGuestsOrExternalUsers);
        $writer->writeCollectionOfPrimitiveValues('includeRoles', $this->includeRoles);
        $writer->writeCollectionOfPrimitiveValues('includeUsers', $this->includeUsers);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the excludeGroups property value. Group IDs excluded from scope of policy.
     *  @param array<string>|null $value Value to set for the excludeGroups property.
    */
    public function setExcludeGroups(?array $value ): void {
        $this->excludeGroups = $value;
    }

    /**
     * Sets the excludeGuestsOrExternalUsers property value. Internal guests or external users excluded in the policy scope. Optionally populated.
     *  @param ConditionalAccessGuestsOrExternalUsers|null $value Value to set for the excludeGuestsOrExternalUsers property.
    */
    public function setExcludeGuestsOrExternalUsers(?ConditionalAccessGuestsOrExternalUsers $value ): void {
        $this->excludeGuestsOrExternalUsers = $value;
    }

    /**
     * Sets the excludeRoles property value. Role IDs excluded from scope of policy.
     *  @param array<string>|null $value Value to set for the excludeRoles property.
    */
    public function setExcludeRoles(?array $value ): void {
        $this->excludeRoles = $value;
    }

    /**
     * Sets the excludeUsers property value. User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
     *  @param array<string>|null $value Value to set for the excludeUsers property.
    */
    public function setExcludeUsers(?array $value ): void {
        $this->excludeUsers = $value;
    }

    /**
     * Sets the includeGroups property value. Group IDs in scope of policy unless explicitly excluded, or All.
     *  @param array<string>|null $value Value to set for the includeGroups property.
    */
    public function setIncludeGroups(?array $value ): void {
        $this->includeGroups = $value;
    }

    /**
     * Sets the includeGuestsOrExternalUsers property value. Internal guests or external users included in the policy scope. Optionally populated.
     *  @param ConditionalAccessGuestsOrExternalUsers|null $value Value to set for the includeGuestsOrExternalUsers property.
    */
    public function setIncludeGuestsOrExternalUsers(?ConditionalAccessGuestsOrExternalUsers $value ): void {
        $this->includeGuestsOrExternalUsers = $value;
    }

    /**
     * Sets the includeRoles property value. Role IDs in scope of policy unless explicitly excluded, or All.
     *  @param array<string>|null $value Value to set for the includeRoles property.
    */
    public function setIncludeRoles(?array $value ): void {
        $this->includeRoles = $value;
    }

    /**
     * Sets the includeUsers property value. User IDs in scope of policy unless explicitly excluded, or None or All or GuestsOrExternalUsers.
     *  @param array<string>|null $value Value to set for the includeUsers property.
    */
    public function setIncludeUsers(?array $value ): void {
        $this->includeUsers = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
