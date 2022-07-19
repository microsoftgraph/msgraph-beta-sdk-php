<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleAssignment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DelegatedPrivilegeStatus|null $assignmentType The type of the admin relationship(s) associated with the role assignment. Possible values are: none, delegatedAdminPrivileges, unknownFutureValue, granularDelegatedAdminPrivileges, delegatedAndGranularDelegetedAdminPrivileges. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: granularDelegatedAdminPrivileges , delegatedAndGranularDelegetedAdminPrivileges.
    */
    private ?DelegatedPrivilegeStatus $assignmentType = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<RoleDefinition>|null $roles The collection of roles assigned.
    */
    private ?array $roles = null;
    
    /**
     * Instantiates a new roleAssignment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.managedTenants.roleAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleAssignment {
        return new RoleAssignment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentType property value. The type of the admin relationship(s) associated with the role assignment. Possible values are: none, delegatedAdminPrivileges, unknownFutureValue, granularDelegatedAdminPrivileges, delegatedAndGranularDelegetedAdminPrivileges. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: granularDelegatedAdminPrivileges , delegatedAndGranularDelegetedAdminPrivileges.
     * @return DelegatedPrivilegeStatus|null
    */
    public function getAssignmentType(): ?DelegatedPrivilegeStatus {
        return $this->assignmentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentType' => function (ParseNode $n) use ($o) { $o->setAssignmentType($n->getEnumValue(DelegatedPrivilegeStatus::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'roles' => function (ParseNode $n) use ($o) { $o->setRoles($n->getCollectionOfObjectValues(array(RoleDefinition::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the roles property value. The collection of roles assigned.
     * @return array<RoleDefinition>|null
    */
    public function getRoles(): ?array {
        return $this->roles;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentType', $this->assignmentType);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('roles', $this->roles);
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
     * Sets the assignmentType property value. The type of the admin relationship(s) associated with the role assignment. Possible values are: none, delegatedAdminPrivileges, unknownFutureValue, granularDelegatedAdminPrivileges, delegatedAndGranularDelegetedAdminPrivileges. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: granularDelegatedAdminPrivileges , delegatedAndGranularDelegetedAdminPrivileges.
     *  @param DelegatedPrivilegeStatus|null $value Value to set for the assignmentType property.
    */
    public function setAssignmentType(?DelegatedPrivilegeStatus $value ): void {
        $this->assignmentType = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the roles property value. The collection of roles assigned.
     *  @param array<RoleDefinition>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value ): void {
        $this->roles = $value;
    }

}
