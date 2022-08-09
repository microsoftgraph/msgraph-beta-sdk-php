<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceRole extends Entity implements Parsable 
{
    /**
     * @var AccessPackageResource|null $accessPackageResource The accessPackageResource property
    */
    private ?AccessPackageResource $accessPackageResource = null;
    
    /**
     * @var string|null $description A description for the resource role.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the resource role such as the role defined by the application.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $originId The unique identifier of the resource role in the origin system. For a SharePoint Online site, the originId will be the sequence number of the role in the site.
    */
    private ?string $originId = null;
    
    /**
     * @var string|null $originSystem The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
    */
    private ?string $originSystem = null;
    
    /**
     * Instantiates a new accessPackageResourceRole and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageResourceRole');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceRole
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceRole {
        return new AccessPackageResourceRole();
    }

    /**
     * Gets the accessPackageResource property value. The accessPackageResource property
     * @return AccessPackageResource|null
    */
    public function getAccessPackageResource(): ?AccessPackageResource {
        return $this->accessPackageResource;
    }

    /**
     * Gets the description property value. A description for the resource role.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the resource role such as the role defined by the application.
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
            'accessPackageResource' => function (ParseNode $n) use ($o) { $o->setAccessPackageResource($n->getObjectValue(array(AccessPackageResource::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'originId' => function (ParseNode $n) use ($o) { $o->setOriginId($n->getStringValue()); },
            'originSystem' => function (ParseNode $n) use ($o) { $o->setOriginSystem($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the originId property value. The unique identifier of the resource role in the origin system. For a SharePoint Online site, the originId will be the sequence number of the role in the site.
     * @return string|null
    */
    public function getOriginId(): ?string {
        return $this->originId;
    }

    /**
     * Gets the originSystem property value. The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        return $this->originSystem;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackageResource', $this->accessPackageResource);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('originId', $this->originId);
        $writer->writeStringValue('originSystem', $this->originSystem);
    }

    /**
     * Sets the accessPackageResource property value. The accessPackageResource property
     *  @param AccessPackageResource|null $value Value to set for the accessPackageResource property.
    */
    public function setAccessPackageResource(?AccessPackageResource $value ): void {
        $this->accessPackageResource = $value;
    }

    /**
     * Sets the description property value. A description for the resource role.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the resource role such as the role defined by the application.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the originId property value. The unique identifier of the resource role in the origin system. For a SharePoint Online site, the originId will be the sequence number of the role in the site.
     *  @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value ): void {
        $this->originId = $value;
    }

    /**
     * Sets the originSystem property value. The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
     *  @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value ): void {
        $this->originSystem = $value;
    }

}
