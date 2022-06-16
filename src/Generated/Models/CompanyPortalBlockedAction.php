<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CompanyPortalBlockedAction implements AdditionalDataHolder, Parsable 
{
    /** @var CompanyPortalAction|null $action Device Action. Possible values are: unknown, remove, reset. */
    private ?CompanyPortalAction $action = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var OwnerType|null $ownerType Device ownership type. Possible values are: unknown, company, personal. */
    private ?OwnerType $ownerType = null;
    
    /** @var DevicePlatformType|null $platform Device OS/Platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown. */
    private ?DevicePlatformType $platform = null;
    
    /**
     * Instantiates a new companyPortalBlockedAction and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompanyPortalBlockedAction
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CompanyPortalBlockedAction {
        return new CompanyPortalBlockedAction();
    }

    /**
     * Gets the action property value. Device Action. Possible values are: unknown, remove, reset.
     * @return CompanyPortalAction|null
    */
    public function getAction(): ?CompanyPortalAction {
        return $this->action;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'action' => function (self $o, ParseNode $n) { $o->setAction($n->getEnumValue(CompanyPortalAction::class)); },
            'ownerType' => function (self $o, ParseNode $n) { $o->setOwnerType($n->getEnumValue(OwnerType::class)); },
            'platform' => function (self $o, ParseNode $n) { $o->setPlatform($n->getEnumValue(DevicePlatformType::class)); },
        ];
    }

    /**
     * Gets the ownerType property value. Device ownership type. Possible values are: unknown, company, personal.
     * @return OwnerType|null
    */
    public function getOwnerType(): ?OwnerType {
        return $this->ownerType;
    }

    /**
     * Gets the platform property value. Device OS/Platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
     * @return DevicePlatformType|null
    */
    public function getPlatform(): ?DevicePlatformType {
        return $this->platform;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeEnumValue('ownerType', $this->ownerType);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. Device Action. Possible values are: unknown, remove, reset.
     *  @param CompanyPortalAction|null $value Value to set for the action property.
    */
    public function setAction(?CompanyPortalAction $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the ownerType property value. Device ownership type. Possible values are: unknown, company, personal.
     *  @param OwnerType|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?OwnerType $value ): void {
        $this->ownerType = $value;
    }

    /**
     * Sets the platform property value. Device OS/Platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
     *  @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value ): void {
        $this->platform = $value;
    }

}
