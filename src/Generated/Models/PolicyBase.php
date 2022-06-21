<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyBase extends DirectoryObject implements Parsable 
{
    /**
     * @var string|null $description Description for this policy. Required.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display name for this policy. Required.
    */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new policyBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.appManagementPolicy': return new AppManagementPolicy();
                case '#microsoft.graph.authorizationPolicy': return new AuthorizationPolicy();
                case '#microsoft.graph.externalIdentitiesPolicy': return new ExternalIdentitiesPolicy();
                case '#microsoft.graph.identitySecurityDefaultsEnforcementPolicy': return new IdentitySecurityDefaultsEnforcementPolicy();
                case '#microsoft.graph.permissionGrantPolicy': return new PermissionGrantPolicy();
                case '#microsoft.graph.servicePrincipalCreationPolicy': return new ServicePrincipalCreationPolicy();
                case '#microsoft.graph.stsPolicy': return new StsPolicy();
                case '#microsoft.graph.tenantAppManagementPolicy': return new TenantAppManagementPolicy();
                case '#microsoft.graph.tenantRelationshipAccessPolicyBase': return new TenantRelationshipAccessPolicyBase();
            }
        }
        return new PolicyBase();
    }

    /**
     * Gets the description property value. Description for this policy. Required.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name for this policy. Required.
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
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
    }

    /**
     * Sets the description property value. Description for this policy. Required.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name for this policy. Required.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
