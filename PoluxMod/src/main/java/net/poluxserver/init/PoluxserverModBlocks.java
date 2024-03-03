
/*
 *    MCreator note: This file will be REGENERATED on each build.
 */
package net.poluxserver.init;

import net.poluxserver.block.PoluxiteOreBlock;
import net.poluxserver.block.PoluxiteBlockBlock;
import net.poluxserver.block.MetroWallBlockBlock;
import net.poluxserver.block.BitumenBlockBlock;
import net.poluxserver.block.BallastBlock;
import net.poluxserver.PoluxserverMod;

import net.minecraftforge.registries.RegistryObject;
import net.minecraftforge.registries.ForgeRegistries;
import net.minecraftforge.registries.DeferredRegister;

import net.minecraft.world.level.block.Block;

public class PoluxserverModBlocks {
	public static final DeferredRegister<Block> REGISTRY = DeferredRegister.create(ForgeRegistries.BLOCKS, PoluxserverMod.MODID);
	public static final RegistryObject<Block> METRO_WALL_BLOCK = REGISTRY.register("metro_wall_block", () -> new MetroWallBlockBlock());
	public static final RegistryObject<Block> BITUMEN_BLOCK = REGISTRY.register("bitumen_block", () -> new BitumenBlockBlock());
	public static final RegistryObject<Block> BALLAST = REGISTRY.register("ballast", () -> new BallastBlock());
	public static final RegistryObject<Block> POLUXITE_ORE = REGISTRY.register("poluxite_ore", () -> new PoluxiteOreBlock());
	public static final RegistryObject<Block> POLUXITE_BLOCK = REGISTRY.register("poluxite_block", () -> new PoluxiteBlockBlock());
}
