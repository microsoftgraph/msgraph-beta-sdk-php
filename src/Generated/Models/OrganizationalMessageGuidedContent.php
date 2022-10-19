<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageGuidedContent extends Entity implements Parsable 
{
    /**
     * @var OrganizationalMessageLogoGuide|null $logo Example of the logo that will be displayed to customers and its size requirements
    */
    private ?OrganizationalMessageLogoGuide $logo = null;
    
    /**
     * @var array<OrganizationalMessagePlacementDetail>|null $placementDetails Contains the different types of text content that can be displayed to customers along with their localized values
    */
    private ?array $placementDetails = null;
    
    /**
     * @var OrganizationalMessageScenario|null $scenario Indicates the scenario for the message
    */
    private ?OrganizationalMessageScenario $scenario = null;
    
    /**
     * @var OrganizationalMessageSurface|null $surface Indicates the area where content will be displayed to customers
    */
    private ?OrganizationalMessageSurface $surface = null;
    
    /**
     * @var OrganizationalMessageTheme|null $theme Indicates the theme for the guided content
    */
    private ?OrganizationalMessageTheme $theme = null;
    
    /**
     * Instantiates a new organizationalMessageGuidedContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.organizationalMessageGuidedContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageGuidedContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageGuidedContent {
        return new OrganizationalMessageGuidedContent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'logo' => fn(ParseNode $n) => $o->setLogo($n->getObjectValue([OrganizationalMessageLogoGuide::class, 'createFromDiscriminatorValue'])),
            'placementDetails' => fn(ParseNode $n) => $o->setPlacementDetails($n->getCollectionOfObjectValues([OrganizationalMessagePlacementDetail::class, 'createFromDiscriminatorValue'])),
            'scenario' => fn(ParseNode $n) => $o->setScenario($n->getEnumValue(OrganizationalMessageScenario::class)),
            'surface' => fn(ParseNode $n) => $o->setSurface($n->getEnumValue(OrganizationalMessageSurface::class)),
            'theme' => fn(ParseNode $n) => $o->setTheme($n->getEnumValue(OrganizationalMessageTheme::class)),
        ]);
    }

    /**
     * Gets the logo property value. Example of the logo that will be displayed to customers and its size requirements
     * @return OrganizationalMessageLogoGuide|null
    */
    public function getLogo(): ?OrganizationalMessageLogoGuide {
        return $this->logo;
    }

    /**
     * Gets the placementDetails property value. Contains the different types of text content that can be displayed to customers along with their localized values
     * @return array<OrganizationalMessagePlacementDetail>|null
    */
    public function getPlacementDetails(): ?array {
        return $this->placementDetails;
    }

    /**
     * Gets the scenario property value. Indicates the scenario for the message
     * @return OrganizationalMessageScenario|null
    */
    public function getScenario(): ?OrganizationalMessageScenario {
        return $this->scenario;
    }

    /**
     * Gets the surface property value. Indicates the area where content will be displayed to customers
     * @return OrganizationalMessageSurface|null
    */
    public function getSurface(): ?OrganizationalMessageSurface {
        return $this->surface;
    }

    /**
     * Gets the theme property value. Indicates the theme for the guided content
     * @return OrganizationalMessageTheme|null
    */
    public function getTheme(): ?OrganizationalMessageTheme {
        return $this->theme;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('logo', $this->logo);
        $writer->writeCollectionOfObjectValues('placementDetails', $this->placementDetails);
        $writer->writeEnumValue('scenario', $this->scenario);
        $writer->writeEnumValue('surface', $this->surface);
        $writer->writeEnumValue('theme', $this->theme);
    }

    /**
     * Sets the logo property value. Example of the logo that will be displayed to customers and its size requirements
     *  @param OrganizationalMessageLogoGuide|null $value Value to set for the logo property.
    */
    public function setLogo(?OrganizationalMessageLogoGuide $value ): void {
        $this->logo = $value;
    }

    /**
     * Sets the placementDetails property value. Contains the different types of text content that can be displayed to customers along with their localized values
     *  @param array<OrganizationalMessagePlacementDetail>|null $value Value to set for the placementDetails property.
    */
    public function setPlacementDetails(?array $value ): void {
        $this->placementDetails = $value;
    }

    /**
     * Sets the scenario property value. Indicates the scenario for the message
     *  @param OrganizationalMessageScenario|null $value Value to set for the scenario property.
    */
    public function setScenario(?OrganizationalMessageScenario $value ): void {
        $this->scenario = $value;
    }

    /**
     * Sets the surface property value. Indicates the area where content will be displayed to customers
     *  @param OrganizationalMessageSurface|null $value Value to set for the surface property.
    */
    public function setSurface(?OrganizationalMessageSurface $value ): void {
        $this->surface = $value;
    }

    /**
     * Sets the theme property value. Indicates the theme for the guided content
     *  @param OrganizationalMessageTheme|null $value Value to set for the theme property.
    */
    public function setTheme(?OrganizationalMessageTheme $value ): void {
        $this->theme = $value;
    }

}
