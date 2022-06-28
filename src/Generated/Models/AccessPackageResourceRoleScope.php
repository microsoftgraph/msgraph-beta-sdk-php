<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceRoleScope extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var AccessPackageResourceRole|null $accessPackageResourceRole Read-only. Nullable. Supports $expand.
    */
    private ?AccessPackageResourceRole $accessPackageResourceRole = null;
    
    /**
     * @var AccessPackageResourceScope|null $accessPackageResourceScope The accessPackageResourceScope property
    */
    private ?AccessPackageResourceScope $accessPackageResourceScope = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $createdBy The createdBy property
    */
    private ?string $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $modifiedBy The modifiedBy property
    */
    private ?string $modifiedBy = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * Instantiates a new accessPackageResourceRoleScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceRoleScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceRoleScope {
        return new AccessPackageResourceRoleScope();
    }

    /**
     * Gets the accessPackageResourceRole property value. Read-only. Nullable. Supports $expand.
     * @return AccessPackageResourceRole|null
    */
    public function getAccessPackageResourceRole(): ?AccessPackageResourceRole {
        return $this->accessPackageResourceRole;
    }

    /**
     * Gets the accessPackageResourceScope property value. The accessPackageResourceScope property
     * @return AccessPackageResourceScope|null
    */
    public function getAccessPackageResourceScope(): ?AccessPackageResourceScope {
        return $this->accessPackageResourceScope;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResourceRole' => function (ParseNode $n) use ($o) { $o->setAccessPackageResourceRole($n->getObjectValue(array(AccessPackageResourceRole::class, 'createFromDiscriminatorValue'))); },
            'accessPackageResourceScope' => function (ParseNode $n) use ($o) { $o->setAccessPackageResourceScope($n->getObjectValue(array(AccessPackageResourceScope::class, 'createFromDiscriminatorValue'))); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'modifiedBy' => function (ParseNode $n) use ($o) { $o->setModifiedBy($n->getStringValue()); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the modifiedBy property value. The modifiedBy property
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        return $this->modifiedBy;
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
        $writer->writeObjectValue('accessPackageResourceRole', $this->accessPackageResourceRole);
        $writer->writeObjectValue('accessPackageResourceScope', $this->accessPackageResourceScope);
        $writer->writeStringValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('modifiedBy', $this->modifiedBy);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessPackageResourceRole property value. Read-only. Nullable. Supports $expand.
     *  @param AccessPackageResourceRole|null $value Value to set for the accessPackageResourceRole property.
    */
    public function setAccessPackageResourceRole(?AccessPackageResourceRole $value ): void {
        $this->accessPackageResourceRole = $value;
    }

    /**
     * Sets the accessPackageResourceScope property value. The accessPackageResourceScope property
     *  @param AccessPackageResourceScope|null $value Value to set for the accessPackageResourceScope property.
    */
    public function setAccessPackageResourceScope(?AccessPackageResourceScope $value ): void {
        $this->accessPackageResourceScope = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the modifiedBy property value. The modifiedBy property
     *  @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value ): void {
        $this->modifiedBy = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

}
