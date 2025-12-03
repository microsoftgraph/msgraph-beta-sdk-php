<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OrganizationalBrandingTheme extends Entity implements Parsable 
{
    /**
     * Instantiates a new OrganizationalBrandingTheme and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalBrandingTheme
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalBrandingTheme {
        return new OrganizationalBrandingTheme();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isDefaultTheme' => fn(ParseNode $n) => $o->setIsDefaultTheme($n->getBooleanValue()),
            'localizations' => fn(ParseNode $n) => $o->setLocalizations($n->getCollectionOfObjectValues([OrganizationalBrandingThemeLocalization::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDefaultTheme property value. Indicates whether the theme is set as the default branding theme for the entire tenant and includes all applications within the tenant. When set to true, this theme is automatically applied to any application that does not have a specific theme assigned. This property is useful for enforcing consistent branding across multiple apps without configuring each one individually. Optional.
     * @return bool|null
    */
    public function getIsDefaultTheme(): ?bool {
        $val = $this->getBackingStore()->get('isDefaultTheme');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefaultTheme'");
    }

    /**
     * Gets the localizations property value. Represents a locale-based branding theme.
     * @return array<OrganizationalBrandingThemeLocalization>|null
    */
    public function getLocalizations(): ?array {
        $val = $this->getBackingStore()->get('localizations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OrganizationalBrandingThemeLocalization::class);
            /** @var array<OrganizationalBrandingThemeLocalization>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localizations'");
    }

    /**
     * Gets the name property value. The name of the branding theme. Up to 120 characters. Required.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefaultTheme', $this->getIsDefaultTheme());
        $writer->writeCollectionOfObjectValues('localizations', $this->getLocalizations());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the isDefaultTheme property value. Indicates whether the theme is set as the default branding theme for the entire tenant and includes all applications within the tenant. When set to true, this theme is automatically applied to any application that does not have a specific theme assigned. This property is useful for enforcing consistent branding across multiple apps without configuring each one individually. Optional.
     * @param bool|null $value Value to set for the isDefaultTheme property.
    */
    public function setIsDefaultTheme(?bool $value): void {
        $this->getBackingStore()->set('isDefaultTheme', $value);
    }

    /**
     * Sets the localizations property value. Represents a locale-based branding theme.
     * @param array<OrganizationalBrandingThemeLocalization>|null $value Value to set for the localizations property.
    */
    public function setLocalizations(?array $value): void {
        $this->getBackingStore()->set('localizations', $value);
    }

    /**
     * Sets the name property value. The name of the branding theme. Up to 120 characters. Required.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

}
